<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Produtos</title>
</head>
<div align="center">
<body>
        @include('menu')
    </br></br></br></br></br>
</br></br></br></br></br>
        <TR> <! Cria a primeira linha da tabela>

<TD>{{$Produto}} </TD> <! Aqui foi criada uma célula>

<TD>{{$Pre}} </TD>

</TR>
</div>
<h1>Página de Produtos</h1>

</br></br></br>

<FONT COLOR=BLUE SIZE=6>Produtos</FONT>

<BR>

<TABLE BORDER=3> <! Inicia a tabela e coloca uma borda de espessura igual a 1>
    <TR> <! Cria a primeira linha da tabela>

        <TD>Calçado </TD> <! Aqui foi criada uma célula>
        
        <TD>Preço </TD>
        
        </TR>
        

<TR> <! Cria a primeira linha da tabela>

<TD>{{$Produto}} </TD> <! Aqui foi criada uma célula>

<TD>{{$Pre}} </TD>

</TR>


</body>
</div>
</html>