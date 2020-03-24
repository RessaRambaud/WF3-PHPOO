<?php

namespace Model;
use App\Cnx;



class Abonne
{
/**
 * @var int|null
 */
private $id_abonne;

    /**
     * @return int|null
     */
    public function getIdAbonne(): ?int
    {
        return $this->id_abonne;
    }

    /**
     * @param int|null $id_abonne
     * @return Abonne
     */
    public function setIdAbonne(?int $id_abonne): Abonne
    {
        $this->id_abonne = $id_abonne;
        return $this;
    }
/**
 * @var string |null
 */
private $prenom;



    /**
     * @return string|null
     */
    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    /**
     * @param string|null $prenom
     * @return Abonne
     */
    public function setPrenom(?string $prenom): Abonne
    {
        $this->prenom = $prenom;
        return $this;
    }
    public function save()
    {
        $pdo = Cnx::getInstance();
        if(empty($this->id_abonne)) {
            $query = 'INSERT INTO abonne(prenom)VALUES(:prenom)';
            $stmt = $pdo->prepare($query);
            $stmt->execute([
                //bind value avec la valeur de l'attribut prenom de l'objet
                ':prenom' => $this->prenom


            ]);
        }
        else
            {
            $query='UPDATE abonne SET prenom=:prenom WHERE id_prenom=:id_prenom';
            $stmt=$pdo->prepare($query);
            $stmt->execute([
                    'prenom'=>$this->prenom,
                    'id_abonne'=>$this->id_abonne
            ]);
             }

    }
    public function delete()
    {
        $pdo=Cnx::getInstance();
        $query ='DELETE FROM abonne WHERE id_abonne ='.$this->id_abonne;
        $pdo->exec($query);
    }

    /**
     * @param array $errors le tableau qui va contenir les erreurs passé par réference
     * @return bool valide ou invalide
     */
    public function validate(array &$errors):bool
    {
        if(empty($this->prenom))
        {
            $errors[]='Le prénom est obligatoire';
        }
        elseif(mb_strlen($this->prenom) > 20)
        {
            $errors[]='Le prénom ne doit pas faire plus de 20 caractères';
        }
        return empty($errors);
    }

    /**
     * @return Abonne[]
     */

    public static function findAll(): array
    {

        $pdo = Cnx::getInstance();
        //retourner tableau d'objets Abonne au lieu du tableau multidimentionnel
        //que retourne le fetchAll() de PDO
        //et l'utiliser dans abonnes.php pour lister les abonées  dans un tableau html
        $stmt = $pdo->query("SELECT * FROM abonne ORDER BY id_abonne ");

        $result = $stmt->fetchAll();

        $abonnes = [];

        foreach ($result as $data) {

            //instanciation d'un objet Abonne
            $abonne = new self();
            //on set ses attributes avec les donées venant de la BDD
            $abonne
                ->setIdAbonne($data['id_abonne'])
                ->setPrenom($data['prenom']);
            $abonnes[] = $abonne;
        }
        return $abonnes;
    }
private static function find(int $id_abonne): ?self
    {
        $pdo=Cnx::getInstance();
        $query='SELECT * FROM abonne WHERE id_abonne='.$id_abonne;
        $stmt=$pdo->query($query);
        $data=$stmt->fetch();
        if(!empty($data))
        {
            $abonne=new Abonne();
            $abonne
                ->setIdAbonne($id_abonne)
                ->setPrenom($data['prenom'])
                ;
        }
    }



}