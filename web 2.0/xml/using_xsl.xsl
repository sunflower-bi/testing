<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version='1.0' xmlns:xsl = "http://www.w3.org/1999/XSL/Transform">
    <xsl:template match='pu'>
        <html>
            <head><title>XML page with XSL</title></head>
            <body bgcolor='beige'>
                <center><h3>Presidency University Student Info</h3>
                    <table border='1' cellpadding='5'>
                        <tr>
                            <td>Roll No</td>
                            <td>Name</td>
                            <td>College</td>
                            <td>Branch</td>
                            <td>Year</td>
                            <td>Email</td>
                        </tr>
                        <xsl:for-each select='student-info'>
                            <tr>
                                <td><xsl:value-of select='rollno'/></td>
                                <td><xsl:value-of select='name'/></td>
                                <td><xsl:value-of select='college'/></td>
                                <td><xsl:value-of select='branch'/></td>
                                <td><xsl:value-of select='year'/></td>
                                <td><xsl:value-of select='email'/></td>
                            </tr>
                        </xsl:for-each>
                    </table>
                </center>
            </body>
        </html>
    </xsl:template>
</xsl:stylesheet>