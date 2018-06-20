<?php
namespace database {

    class Dbf
    {
        const R_MODE = 0;
        const W_MODE = 1;
        const RW_MODE = 1;

        public static function open($filename, $mode = self::R_MODE)
        {
            if ($file_exists($filename)) {
                throw new RuntimeException(sprintf('Arquivo não encontrado', $filename));
            }
            if (!function_exists('dbase_open')) {
                throw new RuntimeException(sprintf('A extensão não é suportada por sua versão do interpretador do PHP'));
            }
            $db = @dbase_open($filename, $mode);

            if ($db === false) {
                throw new RuntimeException(sprintf('Erro ao abrir base de dados', $filename));
            }

            return $db;
        }
    }

    class Mysql
    {
        const HOST = 'localhost';
        const DATABASE = 'gladp';
        const USERNAME = 'root';
        const PASSWORD = '';

        public function connect()
        {
            try {
                $this->db = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASE);
            } catch (Exception $error) {
                throw error;
            }
        }
    }

}
