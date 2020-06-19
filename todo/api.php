<?php
namespace App\Todo;

use Toga\Controller as TOGA;

class api extends TOGA\API
{
    public function details($id)
    {
        $db = new TOGA\Database();
        $object =new \StdClass;
        $object->data = $db->fetch_row('select * from todo where idtodo=?', $id);
        $db->disconnect();
        $this->print(200, $object);
    }
    public function delete($id)
    {
        $db = new TOGA\Database();
        $object =new \StdClass;
        $object->status = $db->delete('todo', ['idtodo'=>$id]);// todo: debemos evaluar true/false
        $db->disconnect();
        $this->print(200, $object);
    }
    public function list()
    {
        $db = new TOGA\Database();
        $object =new \StdClass;
        $object->data = $db->fetch_all('select * from todo');
        $db->disconnect();
        $this->print(200, $object);
    }
    public function add()
    {
        $now = new \Datetime();
        $now->modify("-3 hours"); // todo mover a las configuraciones
        $object =new \StdClass;
        $values = ["nametodo"=> $_POST["name"],"datecreatedtodo"=>$now->format("Y-m-d H:i:s")];
        $object->data = $values;
        $db = new TOGA\Database();
        $object->id = $db->insert('todo', $values);
        $db->disconnect();
        $this->print(200, $object);
    }
    public function update($id)
    {
        $now = new \Datetime();
        $now->modify("-3 hours"); // todo mover a las configuraciones
        $object =new \StdClass;
        $_PUT  = array();
        parse_str(file_get_contents('php://input'), $_PUT);
        $values = ["nametodo"=> $_PUT["name"],"datedonetodo"=>$now->format("Y-m-d H:i:s")];
        $where = ["idtodo"=>$id];
        $db = new TOGA\Database();
        $object->update = $db->update('todo', $values, $where); //todo: debemos evaluar true/false
        $db->disconnect();
        $this->print(200, $object);
    }
}
