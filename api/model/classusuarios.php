<?php

class ClassUsuarios {
    private string $nome;
    private string $sobrenome;
    private string $nascimento;
    private int $cpf;
    private int $rg;
    private string $nomeFantasia;
    private string $razaoSocial;
    private int $idGenero;
    private string $genero;
    private int $cnpj;
    private string $ie;
    private string $im;
    private string $isIm;
    private string $login;
    private string $userPassword;
    protected string $securityPassword;

    public function setNome(string $nome)
    {
        return $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setSobrenome(string $sobrenome)
    {
        return $this->sobrenome = $sobrenome;
    }
    public function getSobrenome()
    {
        return $this->sobrenome;
    }
    
    public function setNascimento(string $nascimento)
    {
        return $this->nascimento = $nascimento;
    }
    public function getNascimento()
    {
        return $this->nascimento;
    }
    
    public function setCpf(int $cpf)
    {
        return $this->cpf = $cpf;
    }
    public function getCpf()
    {
        return $this->cpf;
    }

    public function setRg(int $rg)
    {
        return $this->rg = $rg;
    }
    public function getRg()
    {
        return $this->rg;
    }

    public function setNomeFantasia(string $nomeFantasia)
    {
        return $this->nomeFantasia = $nomeFantasia;
    }
    public function getNomeFantasia()
    {
        return $this->nomeFantasia;
    }

    public function setRazaoSocial(string $razaoSocial)
    {
        return $this->razaoSocial = $razaoSocial;
    }
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    public function setIdGenero(int $idGenero)
    {
        return $this->idGenero = $idGenero;
    }
    public function getIdGenero()
    {
        return $this->idGenero;
    }

    public function setGenero(string $genero)
    {
        return $this->genero = $genero;
    }
    public function getGenero()
    {
        return $this->genero;
    }

    public function setCnpj(int $cnpj)
    {
        return $this->cnpj = $cnpj;
    }
    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setIe(string $ie)
    {
        return $this->ie = $ie;
    }
    public function getIe()
    {
        return $this->ie;
    }

    public function setIm(string $im)
    {
        return $this->im = $im;
    }
    public function getIm()
    {
        return $this->im;
    }

    public function setIsIm(string $isIm)
    {
        return $this->isIm = $isIm;
    }
    public function getIsIm()
    {
        return $this->isIm;
    }

    public function setLogin(string $login)
    {
        return $this->login = $login;
    }
    public function getLogin()
    {
        return $this->login;
    }

    public function setUserPassword(string $userPassword)
    {
        return $this->userPassword = $userPassword;
    }
    public function getUserPassword()
    {
        return $this->userPassword;
    }

    public function setSecurityPassword(string $securityPassword)
    {
        return $this->securityPassword = $securityPassword;
    }
    public function getSecurityPassword()
    {
        return $this->securityPassword;
    }

    public function setIdStatus(int $idStatus)
    {
        return $this->idStatus = $idStatus;
    }
    public function getIdStatus()
    {
        return $this->idStatus;
    }

    public function setStatus(string $status)
    {
        return $this->status = $status;
    }
    public function getStatus()
    {
        return $this->status;
    }

    public function createClienteFisico($nome, $sobrenome, $genero, $nascimento, $rg, $cpf){
        require '../../db/connect.php';
        $campoCpf = 'CPF';
        $campoRg = 'RG';
        $querySelect = $connect->query("SELECT * FROM tb_doc WHERE tipo_doc = 'CPF' AND is_doc = '$cpf' OR tipo_doc = 'RG' AND is_doc = '$rg'");

        if (mysqli_num_rows($querySelect) > 0) {
            $resp = 'Já foi cadastrado';
        } else {

            $sqlInsert = "INSERT INTO tb_usuario (nome_usuario, email_usuario, id_genero, senha_usuario 
                                )VALUES('$nome', '$sobrenome', '$genero', '$nascimento')";

            $sqlInsertCpf = "INSERT INTO tb_doc (tipo_doc, is_doc
                                )VALUES('$campoCpf', '$cpf')";
            $sqlInsertRg = "INSERT INTO tb_doc (tipo_doc, is_doc
                                )VALUES('$campoRg', '$rg')";

            if ($connect->query($sqlInsert) && $connect->query($sqlInsertCpf) && $connect->query($sqlInsertRg) === TRUE) {
                $resp = 'Cadastrado com sucesso';

            } else {
                $resp = 'Ocorreu um erro ao cadastrar seus dados :/';
            }
        }
        echo $resp;
        $connect->close();
    }

    public function teste1($nome, $sobrenome, $genero, $nascimento, $rg, $cpf){
        require '../../db/connect.php';
        $campoCpf = 'CPF';
        $campoRg = 'RG';

        $querySelect = $connect->query("SELECT * FROM tb_doc WHERE tipo_doc = 'CPF' AND is_doc = '$cpf' OR tipo_doc = 'RG' AND is_doc = '$rg'");
        if ($querySelect == TRUE){
            if (mysqli_num_rows($querySelect) > 0) {
                $resp = 'Já foi cadastrado';
            } else {
                $sqlInsert = "INSERT INTO tb_usuario (nome_usuario, email_usuario, id_genero, senha_usuario 
                                    )VALUES('$nome', '$sobrenome', '$genero', '$nascimento')";

                $sqlInsertCpf = "INSERT INTO tb_doc (tipo_doc, is_doc
                                    )VALUES('$campoCpf', '$cpf')";
                $sqlInsertRg = "INSERT INTO tb_doc (tipo_doc, is_doc
                                    )VALUES('$campoRg', '$rg')";

                if ($connect->query($sqlInsert) && $connect->query($sqlInsertCpf) && $connect->query($sqlInsertRg) === TRUE) {
                    $resp = 'Cadastrado com sucesso';

                        $querySQL = $connect->query("SELECT id_usuario FROM tb_usuario WHERE nome_usuario = '$nome'");
                        if($querySQL == TRUE) {
                            if ($rowUser = $querySQL->fetch_array()) {
                                $id = $rowUser['id_usuario'];

                                echo "up" . $id;

                                $update = $connect->query("UPDATE tb_doc set id_usuario = '$id' WHERE is_doc = '$rg' AND is_doc = '$cpf'");
                            }
                        } else {
                            $resp = "ERRO UPDATE";
                        }
                } else {
                    $resp = 'Ocorreu um erro ao cadastrar seus dados :/';
                }
            }
        } else {
            $resp = "ERRO";
        }
        print_r($resp);
        $connect->close();
    }

    public function createClienteFisicoOtimizado($nome, $sobrenome, $genero, $nascimento, $rg, $cpf){
        require '../../db/connect.php';
        $campoCpf = 'CPF';
        $campoRg = 'RG';

        $documentos = [
            'CPF',
            'RG',
        ];
        $inputDoc = array(
            $cpf,
            $rg,
        );

        $querySelect = $connect->query("SELECT tipo_doc, is_doc FROM tb_doc WHERE tipo_doc = 'CPF' AND is_doc = '$cpf' OR tipo_doc = 'RG' AND is_doc = '$rg'");
        if ($querySelect == TRUE){
            if (mysqli_num_rows($querySelect) > 0) {
                $resp = 'Já foi cadastrado';
            } 
            else {
                $sqlInsertUser = "INSERT INTO tb_usuario (nome_usuario, email_usuario, id_genero, senha_usuario 
                                    )VALUES('$nome', '$sobrenome', '$genero', '$nascimento')";

                if ($connect->query($sqlInsertUser) === TRUE) {
                    $i = 0;
                    while ($i <= count($documentos) - 1) {
                    $resp = $documentos[$i];
                    $sqlInsertDoc = $connect->query("INSERT INTO tb_doc (tipo_doc, is_doc
                                        )VALUES('$documentos[$i]', '$inputDoc[$i] - 1')");
                    
                        $i++;
                    };

                    $querySQL = $connect->query("SELECT id_usuario FROM tb_usuario WHERE nome_usuario = '$nome'");
                    if ($querySQL == TRUE) {
                        if ($rowUser = $querySQL->fetch_array()) {
                            $id = $rowUser['id_usuario'];

                            echo "up" . $id;
                            
                            $update = $connect->query("UPDATE tb_doc set id_usuario = '$id' WHERE is_doc = '$rg' AND is_doc = '$cpf'");
                        }
                    } else {
                        $resp = "ERRO UPDATE";
                    }
                    $resp .= 'Cadastrado com sucesso';
                } else {
                    $resp = 'Ocorreu um erro ao cadastrar seus dados :/';
                }
            }
            
        } else {
            $resp = "ERRO";
        }
        print_r($resp);
        $connect->close();
    }

    public function testeDois($usuario, $senha, $email, $genero, $rg, $cpf){
        require '../../db/connect.php';
        $documentos = [
            'CPF',
            'RG',
        ];
        $inputDoc = array(
            $cpf,
            $rg,
        );
        $validarUsuario = $connect->query("SELECT nome_usuario, email_usuario FROM tb_usuario WHERE nome_usuario = '$usuario' OR email_usuario = '$email'");
        if ($validarUsuario == TRUE) {
            if (mysqli_num_rows($validarUsuario) > 0) {
                $resp = "Usuário já existe, escolha outro";
            } else {
                $querySelect = $connect->query("SELECT tipo_doc, is_doc FROM tb_doc WHERE tipo_doc = 'CPF' AND is_doc = '$cpf' OR tipo_doc = 'RG' AND is_doc = '$rg'");
                
                if ($querySelect == TRUE){
                    if (mysqli_num_rows($querySelect) > 0) {
                        $resp = 'Já foi cadastrado';
                    } else {
                        $passUser = md5($senha);
                        $newHash = md5($email . $senha);
                        $custo = '09';
                        $salt = $newHash;
                        $newHash1 = crypt($passUser, '$2b$' . $custo . '$' . $salt . '$');

                        $sqlInsertUser = "INSERT INTO tb_usuario (id_usuario, nome_usuario, email_usuario, senha_usuario, hash, id_acl, id_status, id_genero
                                                        )VALUES('', '$usuario', '$email', '$passUser', '$newHash1', '4', '2', '$genero')";

                        if ($connect->query($sqlInsertUser) == TRUE) {
                            $i = 0;
                            while ($i <= count($documentos) - 1) {
                            $resp = $documentos[$i];
                            $sqlInsertDoc = $connect->query("INSERT INTO tb_doc (tipo_doc, is_doc
                                                                        )VALUES('$documentos[$i]', '$inputDoc[$i] - 1')");
                            
                                $i++;
                            };
                            $querySQL = $connect->query("SELECT id_usuario FROM tb_usuario WHERE nome_usuario = '$usuario'");
                            if ($querySQL == TRUE) {
                                if ($rowUser = $querySQL->fetch_array()) {
                                    $id = $rowUser['id_usuario'];

                                    $update = $connect->query("UPDATE tb_doc set id_usuario = '$id' WHERE is_doc = '$rg' AND is_doc = '$cpf'");
                                }
                            } else {
                                $resp = "ERRO UPDATE";
                            }
                            $resp = 'Cadastrado com sucesso';
                        } else {
                            $resp = 'Ocorreu um erro ao cadastrar seus dados :/';
                        }
                    }
                } else {
                    $resp = "ERRO-PENULTIMO";
                }
            }
        } else {
            $resp = "ERRO-ULTIMO";
        }
        echo $resp;
        $connect->close();
    }


    public function createClienteJuridico($nome, $sobrenome, $genero, $nascimento, $rg, $cpf){
        require '../../db/connect.php';

        $querySelect = $connect->query("SELECT * FROM tb_teste WHERE cpf = '$cpf' OR rg = '$rg'");

        if (mysqli_num_rows($querySelect) > 0) {
            $resp = 'Já foi cadastrado';
        } else {
            $sqlInsert = "INSERT INTO tb_teste (nome, sobrenome, genero, nasc, cpf, rg 
                                )VALUES('$nome', '$sobrenome', '$genero', '$nascimento', '$cpf', '$rg')";

            if ($connect->query($sqlInsert) === true) {
                $resp = 'Cadastrado com sucesso';
            } else {
                $resp = 'Ocorreu um erro ao cadastrar seus dados :/';
            }
        }
        echo $resp;
        $connect->close();
    }
}