<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia de Requerimento</title>
    <link href="css/requerimento.css" rel="stylesheet" type="text/css" />
</head>
<body>

    <?php
        if(isset($_GET['msg']) == "e"){
            echo "Preencha o campo e-mail!<br>";
        }
        elseif(isset($_GET['msg1']) == "matr"){
            echo "Preencha o campo matricula!<br>";
        }
        elseif(isset($_GET['msg2']) == "data"){
            echo "Preencha o campo data de nascimento!<br>";
        }
        elseif(isset($_GET['msg3']) == "nt"){
            echo "Preencha o campo naturalidade!<br>";
        }
        elseif(isset($_GET['msg4']) == "fil"){
            echo "Preencha o campo filiação!<br>";
        }
        elseif(isset($_GET['msg5']) == "cur"){
            echo "Preencha o campo curso!<br>";
        }
        elseif(isset($_GET['msg6']) == "per"){
            echo "Preencha o campo periodo!<br>";
        }
        elseif(isset($_GET['msg7']) == "tur"){
            echo "Preencha o campo turno!<br>";
        }
        elseif(isset($_GET['msg8']) == "tl"){
            echo "Ao menos um campo de telefone deve ser preenchido!<br>";
        }
        elseif(isset($_GET['msg9']) == "req"){
            echo "Preencha o campo requerente!<br>";
        }
        
    ?>

    <fieldset id="area1">
        <form action="validacao.php" method="POST">
            <div id="parte1">
                <img src="img\ifce.png" id="img1" alt="Logo IFCE" title="Logo">
                <label for="guia" id="titulo">GUIA DE REQUERIMENTO</label><br>
                <img src="img\linha.jpg" id="img2" alt="Barra horizontal" title="barra"><br>

                <label for="protocolo" id="prot1">Protocolo n.º</label>
                <input type="number" name="protocolo" id="prot2" readonly="readonly">
            </div>

            <fieldset id="area2">
                <div id="parte2"> 
                    <label for="nome" id="nome1">REQUERENTE: </label>
                    <input type="text" name="nome" id="nome2">

                    <label for="matricula" id="mat1">N° DE MATRÍCULA: </label>
                    <input type="number" name="matricula" id="mat2">

                    <fieldset id="area3">
                        <legend id="preencher">PREENCHER </legend>

                        <label for="nascimento">DATA DE NASCIMENTO: </label>
                        <input type="date" name="nascimento" id="nasc">

                        <label for="naturalidade">NATURALIDADE: </label>
                        <input type="text" name="naturalidade" id="nat">

                        <label for="filiacao">FILIAÇÃO: </label>
                        <input type="text" name="filiacao" id="fil">

                        <div id="parte3">
                            <label for="curso">CURSO: </label>
                            <select name="curso" id="cur">
                                <option value="opc">Selecione uma opção</option>
                                <option value="fisica"> Física</option>
                                <option value="matematica"> Matemática</option>
                                <option value="mecatronica"> Mecatrônica</option>
                                <option value="sistemas"> Sistemas de Informação</option>
                            </select>

                            <label for="periodo">PERÍODO: </label>
                            <input type="number" name="periodo" id="per">

                            <label for="turno" id="tur1">TURNO: </label>
                            <select name="turno" id="tur2">
                                <option value="opc">Selecione uma opção</option>
                                <option value="manha"> Matutino</option>
                                <option value="tarde"> Vespertino</option>
                                <option value="noite"> Noturno</option>
                            </select>

                            <br>

                            <label for="tel1">TELEFONE 1: </label>
                            <input type="tel" name="tel1" id="tel1" placeholder="(99) 9.9999-9999">

                            <label for="tel2">TELEFONE 2: </label>
                            <input type="tel" name="tel2" id="tel2" placeholder="(99) 9.9999-9999"><br>

                            <label for="email">EMAIL: </label>
                            <input type="email" name="email" id="e_mail">
                        </div>
                    </fieldset>

                    <fieldset id="area4">
                        <legend>ASSINALE</legend>

                        <div id="parte4">
                            <table class="opc" width="100%">
                                <tr>
                                    <td>
                                        <input type="radio" value="2via" name="opc">
                                    </td>
                                    <td>2° Via (especificar)</td>
                                    <td style= "border-right: 1px solid #000;"> CAA </td>

                                    <td>
                                        <input type="radio" value="t_disc" name="opc">
                                    </td>
                                    <td>Trancamento de Disciplina (especificar)</td>
                                    <td> CAA </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <input type="radio" value="aproveitamento" name="opc">
                                    </td>
                                    <td>Aproveitamento de Disciplina (anexar Histórico escolar e Programa da disciplina)</td>
                                    <td style= "border-right: 1px solid #000;">Coordenação do Curso</td>

                                    <td>
                                        <input type="radio" value="t_disc" name="opc">
                                    </td>
                                    <td>Trancamento de Matrícula (anexar documentação comprobatória)</td>
                                    <td>Coordenação Pedagógica</td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="radio" value="mfp" name="opc">
                                    </td>
                                    <td>Matrícula fora de Prazo (justificar)</td>
                                    <td style= "border-right: 1px solid #000;"> CAA </td>

                                    <td>
                                        <input type="radio" value="trans" name="opc">
                                    </td>
                                    <td>Transferência para outra Instituição</td>
                                    <td> CAA </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="radio" value="cancel" name="opc">
                                    </td>
                                    <td>Cancelamento da Matrícula</td>
                                    <td style= "border-right: 1px solid #000;"> CAA </td>

                                    <td>
                                        <input type="radio" value="t_disc" name="opc">
                                    </td>
                                    <td>Validação de Conhecimento (especificar)</td>
                                    <td> Coordenação do curso </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="radio" value="colação" name="opc">
                                    </td>
                                    <td>Colação de Grau / Colação Especial (justificar)</td>
                                    <td style= "border-right: 1px solid #000;"> CAA </td>

                                    <td>
                                        <input type="radio" value="reajuste" name="opc">
                                    </td>
                                    <td>Reajuste</td>
                                    <td> CAA </td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="radio" value="decla" name="opc">
                                    </td>
                                    <td>Declaração (espeficifar)</td>
                                    <td style= "border-right: 1px solid #000;"> CAA </td>

                                    <td>
                                        <input type="radio" value="trans" name="opc">
                                    </td>
                                    <td>Recorreção de Prova </td>
                                    <td> Coordenação do Curso</td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="radio" value="dip" name="opc">
                                    </td>
                                    <td>Diploma (especificar)</td>
                                    <td style= "border-right: 1px solid #000;"> CAA </td>

                                    <td>
                                        <input type="radio" value="aux_t" name="opc">
                                    </td>
                                    <td> AUXÍLIO - Transporte</td>
                                    <td> Serviço Social</td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="radio" value="hist" name="opc">
                                    </td>
                                    <td>Histórico Escolar</td>
                                    <td style= "border-right: 1px solid #000;"> CAA </td>

                                    <td>
                                        <input type="radio" value="aux_m" name="opc">
                                    </td>
                                    <td> AUXÍLIO - Moradia</td>
                                    <td> Serviço Social</td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="radio" value="reab" name="opc">
                                    </td>
                                    <td>Reabertura de Matrícula</td>
                                    <td style= "border-right: 1px solid #000;"> CAA </td>

                                    <td>
                                        <input type="radio" value="aux_o" name="opc">
                                    </td>
                                    <td> AUXÍLIO - Óculos</td>
                                    <td> Serviço Social</td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="radio" value="2cha" name="opc">
                                    </td>
                                    <td>Segunda Chamada (anexar justificativa e especificar)</td>
                                    <td style= "border-right: 1px solid #000;">Coordenação do Curso</td>

                                    <td>
                                        <input type="radio" value="aux_p" name="opc">
                                    </td>
                                    <td> AUXÍLIO - Pais e Mães</td>
                                    <td> Serviço Social</td>
                                </tr>

                                <tr>
                                    <td>
                                        <input type="radio" value="rein" name="opc">
                                    </td>
                                    <td>Reingresso</td>
                                    <td style= "border-right: 1px solid #000;"> CAA </td>

                                    <td>
                                        <input type="radio" value="aux_m" name="opc">
                                    </td>
                                    <td> Outros (espeficar)</td>
                                    <td> </td>
                                </tr>
                            </table>

                            <br>
                            
                            <label for="especificar">Especificar: </label><br>
                            <input type="text" name="especificar" id="esp"><br>

                            <br>

                            <label for="justificar">Justificar: </label><br>
                            <input type="text" name="justificar" id="just">
                        </div>
                    </fieldset>

                    <h5>DECLARO CONHECER O REGIMENTO DESTA IFE, BEM COMO O PRAZO NECESSÁRIO À TRAMITAÇÃO DO PROCESSO</h5>

                    <label for="requerente" id="ass_r1">REQUERENTE (ASS. LEGÍVEL): </label>
                    <input type="text" name="requerente" id="ass_r2">

                    <label for="funcionario" id="ass_f1">FUNCIONÁRIO (ASS. LEGÍVEL): </label>
                    <input type="text" name="funcionario" id="ass_f2">

                    <label for="data" id="data1">CEDRO-CE, </label>
                    <input type="date" name="data" id="data2" readonly="readonly"><br>

                    <div class="visto">
                        <div class="coord">
                            <label for="v_coord">VISTO (COORDENAÇÃO DE ASSUNTOS ESTUDANTIS)</label>
                        </div>
                        <input type="radio" name="visto_c" id="n_deve" value="nao"> 
                        <label for="v_coord">O requerente NÃO deve chave de armário</label><br>

                        <input type="radio" name="visto_c" id="deve" value="deve"> 
                        <label for="v_coord">O requerente deve chave do armário</label><br>

                        <div class="coord">
                            <input type="text" name="ass1" class="desc"><br>
                            <label for="assinatura1">Responsável (ass. Legível)</label>
                        </div>
                    </div>

                    <div class="visto">
                        <div class="coord">
                            <label for="v_bib">VISTO (BIBLIOTECA)</label>
                        </div>
                        <input type="radio" name="v_bib" id="naodeve_b" value="nao"> 
                        <label for="v_bib">O requerente NÃO deve livros na biblioteca</label><br>

                        <input type="radio" name="v_bib" id="deve_b" value="deve"> 
                        <label for="descricao2">O requerente deve livros na biblioteca</label><br>

                        <div class="coord">
                            <input type="text" name="ass2" class="desc"><br>
                            <label for="assinatura2">Responsável (ass. Legível)</label>
                        </div>
                    </div>
                    
                </div>
            </fieldset>
            <div class="botoes">
                <input type="submit" value="Cancelar" id="cancelar">    
                <input type="submit" value="Enviar" id="enviar">  
            </div>
        </form>    
    </fieldset>
</body>