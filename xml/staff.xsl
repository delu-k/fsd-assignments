<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:xs="http://www.w3.org/2001/XMLSchema"
    exclude-result-prefixes="xs"
    version="1.0">
    <xsl:template match="/">
        <html>
            <body>
                <h2>Staff Details</h2>
                <table border="1">
                    <tr bgcolor="#9acd32">
                        <th>staff number</th>
                        <th>first name</th>
                        <th>last name</th>
                        <th>salary</th>
                    </tr>
                    <xsl:for-each select="stafflist/staff">
                        <tr>
                            <td><xsl:value-of select="stno"/></td>
                            <td><xsl:value-of select="name/fnm"/></td>
                            <td><xsl:value-of select="name/lnm"/></td>
                            <td><xsl:value-of select="sal"/></td>
                        </tr>
                    </xsl:for-each>
                </table>
            </body>
        </html>
    </xsl:template> 
</xsl:stylesheet>