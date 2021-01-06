<?php
    class DESK_API{
        private $key = null;
        private $error =false;

        function __construct($key = null){
            if(!empty($key)) $this->key = $key;
        }
        function request( $endpoint = '', $params = array()){
            $uri = "desk.json";
            if(is_array($params)){
                foreach($params as $key=>$value){
                    if(empty($value)) continue;
                    $uri.=$key.= '='.urlencode($value).'&';
                }
                $uri = substr($uri, 0, -1);
                $response = @file_get_contents ($uri);
                $this->error= false;
                return json_decode($response,true);
            }else{
                $this->error = true;
                return false;
            }

        }
        function is_error(){
            return $this->error;
        }

        function desk_chamados(){
            $data = $this->request('desk.json');
            if(!empty($data) && is_array($data['colunas'])){
                $this->error = false;
                return $data['root'];
            }else{
                $this->error = true;
                return false;
            }
        }
    }

?>