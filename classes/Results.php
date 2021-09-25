<?php



class Results
{

    private $data;
    private $requirements;
    private $plusPoints = 0;
    private $requiredSubjectPoint = 0;
    private $requiredChosenSubjectPoint = 0;
    private $failure = "";

    private function pcToInt(string $percent): int
    {

        return intval(str_replace("%", "", $percent));
    }

    public function __construct(array $data)
    {

        $this->data = $data;
        $uni = new UniRequirements;
        $this->requirements =  $uni->getRequirements($this->data['valasztott-szak']);
    }

    private function countBestChosenSubjectPoints()
    {

        $matchingReqChoosables = array_intersect($this->requirements[1], array_column($this->data['erettsegi-eredmenyek'], 'nev'));


        if (empty($matchingReqChoosables)) {
            $this->failure = "Hiba, nem lehetséges a pontszámítás a kötelezően választható érettségi tárgyak hiánya miatt";
        } else {

            for ($i = 0; $i < count($this->data['erettsegi-eredmenyek']); $i++) {
                if (in_array($this->data['erettsegi-eredmenyek'][$i]['nev'], $matchingReqChoosables)) {
                    if ($this->pcToInt($this->data['erettsegi-eredmenyek'][$i]['eredmeny'] > $this->requiredChosenSubjectPoint)) {
                        $this->requiredChosenSubjectPoint = $this->pcToInt($this->data['erettsegi-eredmenyek'][$i]['eredmeny']);
                    }
                }
            }
        }
    }

    private function countRequiredSubjectPoints()
    {
        if (!array_search($this->requirements[0], array_column($this->data['erettsegi-eredmenyek'], 'nev'))) {
            $this->failure =  "Hiba, nem lehetséges a pontszámítás a kötelező érettségi tárgy hiánya miatt";
            return false;
        }

        for ($i = 0; $i < count($this->data['erettsegi-eredmenyek']); $i++) {
            if ($this->pcToInt($this->data['erettsegi-eredmenyek'][$i]['eredmeny']) < 20) {
                $this->failure = "Hiba, nem lehetséges a pontszámítás a(z) " . $this->data['erettsegi-eredmenyek'][$i]['nev'] . " tárgyból elért 20% alatti eredmény miatt";
                return false;
            } else {
                if ($this->data['erettsegi-eredmenyek'][$i]['nev'] === $this->requirements[0]) {
                    $this->requiredSubjectPoint =  $this->pcToInt($this->data['erettsegi-eredmenyek'][$i]['eredmeny']);
                }
            }
        }
    }

    private function countElevatedExamPlusPoints()
    {
        for ($i = 0; $i < count($this->data['erettsegi-eredmenyek']); $i++) {
            if ($this->data['erettsegi-eredmenyek'][$i]['tipus'] == 'emelt') {
                $this->plusPoints += 50;
            }
        }
    }

    private function countLanguagePoints()
    {
        $langExams = array_unique(array_column($this->data['tobbletpontok'], 'nyelv'));

        foreach ($langExams as $lang) {
            for ($i = 0; $i < count($this->data['tobbletpontok']); $i++) {

                if ($this->data['tobbletpontok'][$i]['nyelv'] == $lang && $this->data['tobbletpontok'][$i]['tipus'] == "B2") {
                    $this->plusPoints += 28;
                } else {
                    if ($this->data['tobbletpontok'][$i]['nyelv'] == $lang && $this->data['tobbletpontok'][$i]['tipus'] == "C1") {
                        $this->plusPoints += 40;
                    }
                }
            }
        }
    }

    public function countFinalResults(): array
    {

        if (!$this->failure) $this->countBestChosenSubjectPoints();
        if (!$this->failure) $this->countRequiredSubjectPoints();
        if (!$this->failure) $this->countElevatedExamPlusPoints();
        if (!$this->failure) $this->countLanguagePoints();

        $finalPoints = ($this->requiredSubjectPoint + $this->requiredChosenSubjectPoint) * 2;
        $finalPoints += ($this->plusPoints > 100) ? 100 : $this->plusPoints;

        if ($this->failure) {
            return  ['result' => 'failed', 'msg' => $this->failure];
        } else {
            return  ['result' => 'success', 'msg' => $finalPoints];
        }
    }
}
