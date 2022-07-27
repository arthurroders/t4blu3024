<html>
   <head>
        <title>Trabalho 4 - Integração de Sistemas para Automação</title>
    </head>
   
   <h1> Trabalho Webservice </h1>
  <body>
    <form method="post" action="dados.php">
      <label> Código da disciplina</label>
            <input type="text" name="codigo" placeholder="Código">
            <br>
      <label> Nome da disciplina</label>
            <input type="text" name="nome" placeholder="Nome">
            <br>
      <label> Carga Horária da disciplina</label>
            <input type="numer" name="carga" placeholder="Horas">
            <br>
      <label> Pré-requisitos da disciplina</label>
            <input type="text" name="prereq" placeholder="Código">
            <br>
      <label>Matérias Equivalentes</label>
            <input type="text" name="eq" placeholder="Codigo">
            <br>
      <label>Ementa da Disciplina</label>
            <input type="text" name="ementa" placeholder="Tópicos">
            <br>
      <input type="submit" name="enviadados" value="Enviar Dados">
      <input type="submit" name="mostradados" value="Lista de Disciplinas">
        <br>
       <br>
       <label>Consultar disciplina</label>
            <input type="submit" name="consultadados" value="Consultar Disciplina">
            <br>        
      </form> 
  </body>
</html>
