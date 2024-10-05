<%@ Page Language="C#" AutoEventWireup="true" CodeFile="Default.aspx.cs" Inherits="_Default" %>

<!DOCTYPE html>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head id="Head1" runat="server">
    <meta charset="utf-8" />
    <title>Tipo de Impuesto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            margin-top: 50px;
        }
        .alert {
            font-size: 1.2em;
        }
        .large-text {
            font-size: 1.5em;
        }
    </style>
</head>
<body>
    <form id="form1" runat="server">
        <div class="container">
            <h1>Desde C#</h1>
            <div class="alert alert-info">
                El tipo de impuesto para la propiedad con código catastral 
                <span class="large-text"><asp:Literal ID="LiteralCodCatastro" runat="server"></asp:Literal></span> 
                es: 
                <span class="large-text"><asp:Literal ID="LiteralTipoImpuesto" runat="server"></asp:Literal></span>.
            </div>
            <a href="http://localhost:800/primerExam/dos/catastro/index.php" class="btn btn-primary">Volver</a>
        </div>
    </form>
</body>
</html>