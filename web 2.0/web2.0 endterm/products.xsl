<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version='1.0' xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">
    <xsl:template match='products'>
        <html>
            <head><title>XML page with XSL</title></head>
            <body bgcolor='beige'>
                <center><h3>Product Info</h3>
                    <table border='1' cellpadding='5'>
                        <tr>
                            <td>ID No</td>
                            <td>Product Name</td>
                            <td>Category</td>
                            <td>Price</td>
                        </tr>
                        <xsl:for-each select='info'>
                            <tr>
                                <td><xsl:value-of select='prod-id'/></td>
                                <td><xsl:value-of select='name'/></td>
                                <td><xsl:value-of select='category'/></td>
                                <td><xsl:value-of select='price'/></td>
                            </tr>
                        </xsl:for-each>
                    </table>
                </center>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>