<?php
    class golyak 
    {
        private $table_name = "golyak";
        private $conn;

        public $id;
        public $nev;
        public $email;
        public $nem;
        public $lakcim;
        public $telefonszam;
        public $szak;
        public $allergia;
        public $etel;
        public $polomeret;
        public $kedd;
        public $szerda;
        public $csutortok;
        public $pentek;
        public $szombat;
        public $egyeb;
        public $code;
        public $golyae;
        public $created;
        public $updated;

        public function __construct($db) {
            $this->conn = $db;
        }
        
        public function create()
        {
            $query = 'INSERT INTO ' . $this->table_name . " SET nev = :nev, email=:email,nem=:nem,lakcim=:lakcim,telefonszam=:telefonszam,szak=:szak,allergia=:allergia,etel=:etel,polomeret=:polomeret,kedd=:kedd,szerda=:szerda,csutortok=:csutortok,pentek=:pentek,szombat=:szombat,egyeb=:egyeb";

            $stmt = $this->conn->prepare($query);

            $this->nev=htmlspecialchars(strip_tags($this->nev));
            $this->email=htmlspecialchars(strip_tags($this->email));
            $this->nem=htmlspecialchars(strip_tags($this->nem));
            $this->lakcim=htmlspecialchars(strip_tags($this->lakcim));
            $this->telefonszam=htmlspecialchars(strip_tags($this->telefonszam));
            $this->szak=htmlspecialchars(strip_tags($this->szak));
            $this->allergia=htmlspecialchars(strip_tags($this->allergia));
            $this->etel=htmlspecialchars(strip_tags($this->etel));
            $this->polomeret=htmlspecialchars(strip_tags($this->polomeret));
            $this->kedd=htmlspecialchars(strip_tags($this->kedd));
            $this->szerda=htmlspecialchars(strip_tags($this->szerda));
            $this->csutortok=htmlspecialchars(strip_tags($this->csutortok));
            $this->pentek=htmlspecialchars(strip_tags($this->pentek));
            $this->szombat=htmlspecialchars(strip_tags($this->szombat));
            $this->egyeb=htmlspecialchars(strip_tags($this->egyeb);

            $stmt->bindParam(":nev", $this->nev);
            $stmt->bindParam(":email", $this->email);
            $stmt->bindParam(":nem", $this->nem);
            $stmt->bindParam(":lakcim", $this->lakcim);
            $stmt->bindParam(":telefonszam", $this->telefonszam);
            $stmt->bindParam(":szak", $this->szak);
            $stmt->bindParam(":allergia", $this->allergia);
            $stmt->bindParam(":etel", $this->etel);
            $stmt->bindParam(":polomeret", $this->polomeret);
            $stmt->bindParam(":kedd", $this->kedd);
            $stmt->bindParam(":szerda", $this->szerda);
            $stmt->bindParam(":csutortok", $this->csutortok);
            $stmt->bindParam(":pentek", $this->pentek);
            $stmt->bindParam(":szombat", $this->szombat);
            $stmt->bindParam(":egyeb", $this->egyeb);

            if ($stmt->execute()) {
                return true;
            } else {
                return false;
            }
        }

    }    
?>