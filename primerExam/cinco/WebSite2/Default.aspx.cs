using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        string codCatastro = Request.Params["codCatastro"];
        string rol = Request.Params["rol"];

        if (!string.IsNullOrEmpty(codCatastro))
        {
            LiteralCodCatastro.Text = codCatastro;

            string tipoImpuesto = VerificaTipoImpuesto(codCatastro);

            LiteralTipoImpuesto.Text = tipoImpuesto;
        }
        else
        {
            LiteralCodCatastro.Text = "No se proporcionó código catastral.";
            LiteralTipoImpuesto.Text = "N/A";
        }
    }
    private string VerificaTipoImpuesto(string codigoCatastro)
    {
        char primerCaracter = codigoCatastro[0];
        int primerDigito = (int)Char.GetNumericValue(primerCaracter);

        if (primerDigito == 1)
        {
            return "Alto";
        }
        else if (primerDigito == 2)
        {
            return "Medio";
        }
        else if (primerDigito == 3)
        {
            return "Bajo";
        }
        else {
            return "N/A";
        }
    }
}