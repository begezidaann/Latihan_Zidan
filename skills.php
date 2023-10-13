<?php 
class skills {
    private $user_id;
    private $soft;
    private $percentage;
    private $listskill = [
        [
            'user_id' => 1,
            'soft' => 'Baik',
            'percentage' => '100%',
        ],
        [
            'user_id' => 2,
            'soft' => 'Gampang Paham',
            'percentage' => '88%',
        ],
        [
            'user_id' => 3,
            'soft' => 'Ceria',
            'percentage' => '85%',
        ],
    ];
    public function getUserID() {
        return $this->user_id;
    }

    public function setUserID($user_id) {
        $this->user_id = $user_id;
    }

    public function getSoft() {
        return $this->soft;
    }

    public function setSoft($soft) {
        $this->soft = $soft;
    }

    public function getPercentage() {
        return $this->percentage;
    }

    public function setPercentage($percentage) {
        $this->percentage = $percentage;
    }

    public function getAllSkills() {
        return $this->listskill;
    }

    public function getById($user_id) {
        $rows = array();
        foreach($this->listskill as $val){
            if($val['user_id'] == $user_id){
                array_push($rows, $val);
            }
        }
        return $rows;
    }
}
?>