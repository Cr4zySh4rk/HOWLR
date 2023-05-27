<?php
class howlr2
{
    private $id;
    private $name;
    private $addr;
    private $info;
    private $lat;
    private $lng;
    private $site;
    private $htmlcss;
    private $phpjs;
    private $java;
    private $c;
    private $cpp;
    private $pyth;
    private $aiml;
    private $conn;
    private $tableName = "jobs";
    
    function setId($id) { $this->id = $id; }
    function getId() { return $this->id; }
    function setName($name) { $this->name = $name; }
    function getName() { return $this->name; }
    function setAddr($addr) { $this->addr = $addr; }
    function getAddr() { return $this->addr; }
    function setInfo($info) { $this->info = $info; }
    function getInfo() { return $this->info; }
    function setLat($lat) { $this->lat = $lat; }
    function getLat() { return $this->lat; }
    function setLng($lng) { $this->lng = $lng; }
    function getLng() { return $this->lng; }
    function setSite($site) { $this->site = $site; }
    function getSite() { return $this->site; }
    function setHtmlcss($htmlcss) { $this->htmlcss = $htmlcss; }
    function getHtmlcss() { return $this->htmlcss; }
    function setPhpjs($phpjs) { $this->phpjs = $phpjs; }
    function getPhpjs() { return $this->phpjs; }
    function setJava($java) { $this->java = $java; }
    function getJava() { return $this->java; }
    function setC($c) { $this->c = $c; }
    function getC() { return $this->c; }
    function setCpp($cpp) { $this->cpp = $cpp; }
    function getCpp() { return $this->cpp; }
    function setPyth($pyth) { $this->pyth = $pyth; }
    function getPyth() { return $this->pyth; }
    function setAiml($aiml) { $this->aiml = $aiml; }
    function getAiml() { return $this->aiml; }
    


    public function __construct()
    {
        require_once('db/DbConnect.php');
        $conn = new DbConnect;
        $this->conn = $conn->connect();
    }


    public function getBlankLatLng() {
        $sql = "SELECT * FROM $this->tableName WHERE lat IS NULL AND lng IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAll() {
        $sql = "SELECT * FROM $this->tableName";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getHC() {
        $sql = "SELECT * FROM $this->tableName WHERE htmlcss=1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPJ() {
        $sql = "SELECT * FROM $this->tableName WHERE phpjs=1";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFS() {
        $sql = "SELECT * FROM $this->tableName WHERE phpjs=1 AND htmlcss=1" ;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getCP() {
        $sql = "SELECT * FROM $this->tableName WHERE c=1" ;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getJ() {
        $sql = "SELECT * FROM $this->tableName WHERE java=1" ;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getP() {
        $sql = "SELECT * FROM $this->tableName WHERE pyth=1" ;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAI() {
        $sql = "SELECT * FROM $this->tableName WHERE aiml=1" ;
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateLatLngJobs() {
        $sql = "UPDATE $this->tableName SET lat = :lat, lng = :lng WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindParam(':lat', $this->lat);
        $stmt->bindParam(':lng', $this->lng);
        $stmt->bindParam(':id', $this->id);

        if ($stmt->execute()) {
            return true;
        }
        else {
            return false;
        }
    }

}
?>