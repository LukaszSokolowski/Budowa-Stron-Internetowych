<?xml version="1.0"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:output doctype-public="-//W3C//DTD XHTML 1.1//EN" doctype-system="http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd" encoding="ISO-8859-2" method="html"/>
<xsl:template match="/">
  <html>
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Faktura VAT</title>
        <style type="text/css">

          .container {
            background-image: url('faktura.png');
            width:  679px;
            height: 960px;
            border-style: solid;
          }

          .nrFaktury {
            margin-top: 73px;
            margin-left: 370px;
            font-size: 20px;
            text-align: left;
          }

          .row1 {
            margin-top: 255px;
            float: left;
          }

          .column1{
            float: left;
            width: 221px;
          }

          .column1Item {
          padding-left: 45px;
          padding-top:  4px;
          padding-bottom: 4px;
          font-size: 12px;
          }

          .column2{
            float: left;
            width: 31px;
            margin-left: 86px;
          }

          .column2Item {
            padding-top:  4px;
            padding-bottom: 4px;
            font-size: 12px;
          }

          .column3{
            padding-top: 4px;
            float: left;
            width: 48px;
            margin-left: 253px;
          }

          .column3Item {
          width: 40px;
          height: 24px;
          font-size: 12px;

          }

          .suma {
            float: left;
            padding-top: 22px;
            margin-left: 600px;
            font-size: 12px;
          }

        </style>

      </head>

      <body>
        <center>
        <div class="container">

          <div class="nrFaktury"> <xsl:value-of select="Dane/NumerFaktury"/> </div>

          <div class="row1">
              <div class="column1">
                  <xsl:for-each select="Dane/Przedmiot">
                      <div class="column1Item">
                        <xsl:value-of select="nazwa"/>
                      </div>
                  </xsl:for-each>
              </div>


              <div class="column2">
                  <xsl:for-each select="Dane/Przedmiot">
                      <div class="column2Item">
                        <xsl:value-of select="ilosc"/>
                      </div>
                  </xsl:for-each>
              </div>


              <div class="column3">
                  <xsl:for-each select="Dane/Przedmiot">
                      <div class="column3Item">
                        <xsl:value-of select="brutto"/>
                      </div>
                  </xsl:for-each>
              </div>
          </div>
          <div style="clear: both;"> </div>
          <div class="suma">Suma</div>
      </div>

      </center>

      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
