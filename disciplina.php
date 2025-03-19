<?php
    session_start();
    if(isset($_SESSION['id_user'])){
        $username = $_SESSION['nome'];
    }else{
        header('location:index.php')
    }
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset='utf-8'>
    <title>Meu SIGA</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <a href="#">
        <img src="imagens/seta_verde.png" id="irTopo" alt="seta p cima">
    </a>
    <header>
        <h1>Sistema Acadêmico - Disciplinas</h1>
    </header>
    <hr>
    <div class="content">
        <nav>
            <div class="perfil">
                <img src="fotos/b93dcc21a7dbdb53853273dc5d39ee99.jpg" alt="foto Perfil"><br>
                <a href="conta.php">conta</a>&nbsp;&nbsp;|&nbsp;&nbsp;<a href="deslogar.php">sair</a>
            </div>
            <ul>
             <li><a href="home.php">Home</a></li>
             <li><a href="biblioteca.php">Biblioteca</a></li>
             <li><a href="disciplinas.php">Disciplinas</a></li>          
             <li><a href="boletim.php">Boletim</a></li>
             <li><a href="jogovelha.php">Jogar</a></li>
         </ul>
      </nav>

      <main>
        <h2>Disciplinas</h2>
        <h3>1º Período</h3>
        <table>
            <tr>
                <th>Disciplina</th>
                <th>Turno</th>
                <th>Total Aulas</th>
                <th>Carga horária</th>
                <th>Curso</th>
                <th>Professor</th>
                <th>Opções</th>
            </tr>    
                            
                <tr>
                        <td>Algoritmos 1</td>
                        <td>Noturno</td>
                        <td>80</td>
                        <td>60</td>
                        <td>PROEJA-Informática para Internet</td>
                                                <td>Aurelio Junior</td>
                        <td><button onclick="location.href='matricular.php?id_disciplina=11&id_user=11'">Matricular-se</button>
                        <a href="excluirDisciplina.php?id_disciplina=11"><ion-icon name="trash"></ion-icon></a>
                    </td>
                    </tr>
                                    
                <tr>
                        <td>Projeto e Design</td>
                        <td>Noturno</td>
                        <td>100</td>
                        <td>75</td>
                        <td>PROEJA-Informática para Internet</td>
                                                <td>Camila</td>
                        <td><button onclick="location.href='matricular.php?id_disciplina=12&id_user=11'">Matricular-se</button>
                        <a href="excluirDisciplina.php?id_disciplina=12"><ion-icon name="trash"></ion-icon></a>
                    </td>
                    </tr>
                                    
                <tr>
                        <td>Filosofia 1</td>
                        <td>Noturno</td>
                        <td>40</td>
                        <td>30</td>
                        <td>PROEJA-Informática para Internet</td>
                                                <td>Ricardo </td>
                        <td><button onclick="location.href='matricular.php?id_disciplina=13&id_user=11'">Matricular-se</button>
                        <a href="excluirDisciplina.php?id_disciplina=13"><ion-icon name="trash"></ion-icon></a>
                    </td>
                    </tr>
                                    
                <tr>
                        <td>Redes de Computadores</td>
                        <td>Noturno</td>
                        <td>80</td>
                        <td>60</td>
                        <td>PROEJA-Informática para Internet</td>
                                                <td>Leandro Steffen</td>
                        <td><button onclick="location.href='matricular.php?id_disciplina=14&id_user=11'">Matricular-se</button>
                        <a href="excluirDisciplina.php?id_disciplina=14"><ion-icon name="trash"></ion-icon></a>
                    </td>
                    </tr>
                                    
                <tr>
                        <td>Algoritmos 2</td>
                        <td>Noturno</td>
                        <td>80</td>
                        <td>60</td>
                        <td>Licenciatura em Computação</td>
                                                <td>Aurelio Junior</td>
                        <td><button onclick="location.href='matricular.php?id_disciplina=15&id_user=11'">Matricular-se</button>
                        <a href="excluirDisciplina.php?id_disciplina=15"><ion-icon name="trash"></ion-icon></a>
                    </td>
                    </tr>
                                    
                <tr>
                        <td>Banco de Dados</td>
                        <td>Noturno</td>
                        <td>100</td>
                        <td>75</td>
                        <td>Licenciatura em Computação</td>
                                                <td>Aurelio Junior</td>
                        <td><button onclick="location.href='matricular.php?id_disciplina=16&id_user=11'">Matricular-se</button>
                        <a href="excluirDisciplina.php?id_disciplina=16"><ion-icon name="trash"></ion-icon></a>
                    </td>
                    </tr>
                                    
                <tr>
                        <td>Filosofia 2</td>
                        <td>Noturno</td>
                        <td>40</td>
                        <td>30</td>
                        <td>Licenciatura em Computação</td>
                                                <td>Ricardo </td>
                        <td><button onclick="location.href='matricular.php?id_disciplina=17&id_user=11'">Matricular-se</button>
                        <a href="excluirDisciplina.php?id_disciplina=17"><ion-icon name="trash"></ion-icon></a>
                    </td>
                    </tr>
                                
           
        </table>
        <h3>2º Período</h3>
        <table>
            <tr>
                <th>Disciplina</th>
                <th>Turno</th>
                <th>Total Aulas</th>
                <th>Carga horária</th>
                <th>Curso</th>
                <th>Professor</th>
                <th>Opções</th>
            </tr>
            
            <tr>
                <td>Disciplinas período 2</td>
                <td>Matutino</td>
                <td>4</td>
                <td>90</td>
                <td>Técnico em Informática</td>
                <td>Joelson</td>
                <td>
                    <button>Matricular-se</button>
                    <ion-icon name="trash"></ion-icon>
                </td>
            </tr>
            <tr>
                <td>Disciplinas período 2</td>
                <td>Matutino</td>
                <td>4</td>
                <td>90</td>
                <td>Técnico em Informática</td>
                <td>Joelson</td>
                <td>
                    <button>Matricular-se</button>
                    <ion-icon name="trash"></ion-icon>
                </td>
            </tr>
        </table>
        <h3>3º Período</h3>
        <table>
            <tr>
                <th>Disciplina</th>
                <th>Turno</th>
                <th>Total Aulas</th>
                <th>Carga horária</th>
                <th>Curso</th>
                <th>Professor</th>
                <th>Opções</th>
            </tr>
            <tr>
                <td>Disciplinas período 3</td>
                <td>Matutino</td>
                <td>4</td>
                <td>90</td>
                <td>Técnico em Informática</td>
                <td>Joelson</td>
                <td>
                    <button>Matricular-se</button>
                    <ion-icon name="trash"></ion-icon>
                </td>
            </tr>
            <tr>
                <td>Disciplinas período 3</td>
                <td>Matutino</td>
                <td>4</td>
                <td>90</td>
                <td>Técnico em Informática</td>
                <td>Joelson</td>
                <td>
                    <button>Matricular-se</button>
                    <ion-icon name="trash"></ion-icon>
                </td>
            </tr>
        </table>
        
    </main>
</div>
<footer>
    <hr>
    <button onclick="history.back(); ">Voltar</button>
    <p>&copy;Todos os direitos reservados;</p>
</footer>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>

</html>