<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version='1.0' xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">
    <xsl:template match='company'>
        <html>
            <head><title>Employee Details with XSL</title></head>
            <body bgcolor='beige'>
                <center><h3>Presidency University Student Info</h3>
                    <table border='1' cellpadding='5'>
                        <tr bgcolor="brown">
                            <td>ID No</td>
                            <td>Name</td>
                            <td>Mobile Number</td>
                            <td>Salary</td>
                        </tr>
                        <xsl:for-each select='employee'>
                            <tr>
                                <td><xsl:value-of select='@empNo'/></td>
                                <td><xsl:value-of select='empName'/></td>
                                <td><xsl:value-of select='mobile'/></td>
                                <td><xsl:value-of select='salary'/></td>
                            </tr>
                        </xsl:for-each>
                    </table>
                </center>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>