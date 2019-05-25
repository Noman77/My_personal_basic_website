<?php
    class Bangladesh
    {
        private $info="";
        
        public function setContinent($continet)
        {
            $this->info.="Continent : ".$continet."<br/>";
            return $this;
        }
        public function setLang($lang)
        {
            $this->info.="Language : ".$lang."<br/>";
            return $this;
        }
        public function showInfo()
        {
            return $this->info;
        }
        
        
    }

    $bangladesh = new Bangladesh;
    echo $bangladesh->setContinent("Asia")->setLang("Bengali")->showInfo();
?>