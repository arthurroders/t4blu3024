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
            <input type="text" name="prereq" placeholder="Tópicos">
            <br>
      <label>Matérias Equivalentes</label>
            <input type="text" name="eq" placeholder="Codigo">
            <br>
      <label>Ementa da matéria</label>
            <input type="text" name="ementa" placeholder="Tópicos">
            <br>
      <button type="submit">Enviar dados</button>  
      <button type="submit">Lista de matérias</button>  
        <br>
       <br>
       <label>Consultar matéria</label>
            <input type="text" name="consulta" placeholder="Código">
            <br>
         <button type="submit">Consultar</button>        
        
      </form>
  
  </body>
</html>
