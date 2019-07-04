@include('menu')
<!DOCTYPE html>


<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>contatos</title>
</head>
<div align="center">
<body>
    
</br></br></br></br></br>


<div align="left">     
<h1>Página de contato</h1>
</br></br></br>
<h2>Entre em contato com o email
    </br></br></br></br></br>
    <div align="left">
        <FONT COLOR=BLUE SIZE=6>Contato</FONT>

        <BR>
        
        <TABLE BORDER=3> <! Inicia a tabela e coloca uma borda de espessura igual a 1>
            <TR> 
                <TD>Email </TD> <! Aqui foi criada uma célula>
            
            <TD>Telefone </TD>
            </tr>
    
        
        <TD>{{$email}} </TD> <! Aqui foi criada uma célula>
        
        <TD>{{$Telefone}} </TD>
        
        </TR>
    </div>
    
</h2>
</body>
</div>
</html>