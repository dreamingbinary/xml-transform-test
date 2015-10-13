<?xml version="1.0" encoding="utf-8"?>
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
    xmlns:msxsl="urn:schemas-microsoft-com:xslt" exclude-result-prefixes="msxsl"
>
	<xsl:template match='/Parent'>
		<Root>
			<C1>
				<xsl:value-of select='Child1'/>
			</C1>
			<C2>
				<xsl:value-of select='Child2'/>
			</C2>
		</Root>
	</xsl:template>

	<xsl:output method="xml" encoding="utf-8" />

</xsl:stylesheet>
