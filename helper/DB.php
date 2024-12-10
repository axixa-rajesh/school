<?php 
function DB($tbl,$pk='id'){
    return new class($tbl,$pk) extends mysqli{
        private $tbl,$pk;
        function __construct($tbl,$pk)
        {
            parent::__construct('localhost','root','','school');
            $this->tbl=$tbl;
            $this->pk=$pk;
        }
        function save(array $data,int|string $id=""){
            $sql="insert into $this->tbl set ";
            $wh="";
            if($id){
                $sql = "update  $this->tbl set ";
                $wh=" where $this->pk=$id";
            }
            foreach($data as $colname=>$val){
                $sql.="$colname='". addslashes($val)."',";
            }
            $sql=substr($sql,0,-1).$wh;
            if($this->query($sql)){
                return ($id)?$id: $this->insert_id;
            }
            return false;
        }
        function fetchAll($col="*",$order=""){
            if(!$order){
                $order="  $this->pk desc";
            }
            $sql="select $col from $this->tbl order by $order";
            return $this->query($sql)?->fetch_all(1);
        }
        function custom($sql)
        {
           
            return $this->query($sql)?->fetch_assoc();
        }
        function fetchOne($id,$col = "*")
        {
            $sql = "select $col from $this->tbl where $this->pk=$id";
            return $this->query($sql)?->fetch_assoc();
        }
        function delete($id, )
        {
            $sql = "delete from $this->tbl where $this->pk=$id";
            return $this->query($sql);
        }
        function __destruct()
        {
            $this->close();
        }
    };
}