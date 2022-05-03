<?php


class Connect
{
    private $server = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'web_nang_cao';

    private function cnt()
    {
        $connect = mysqli_connect('localhost','root','','web_nang_cao');
        mysqli_set_charset($connect,'utf8');

        return $connect;
    }

    public function select($sql)
    {
        $connect = $this->cnt();

        $result = mysqli_query($connect,$sql);

        mysqli_close($connect);

        return $result;
    }

    public function excute($sql)
    {
        $connect = $this->cnt();

        mysqli_query($connect,$sql);

        mysqli_close($connect);
    }
}