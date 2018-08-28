<?php
$BEAUT_PATH = realpath(".")."/Services/COPage/syntax_highlight/php";
if (!isset ($BEAUT_PATH)) return;
require_once("$BEAUT_PATH/Beautifier/HFile.php");
  class HFile_asm515c extends HFile{
   function HFile_asm515c(){
     $this->HFile();	
/*************************************/
// Beautifier Highlighting Configuration File 
// ASM for C515C
/*************************************/
// Flags

$this->nocase            	= "1";
$this->notrim            	= "0";
$this->perl              	= "0";

// Colours

$this->colours        	= array("blue", "purple", "gray", "brown", "blue", "purple", "gray");
$this->quotecolour       	= "blue";
$this->blockcommentcolour	= "green";
$this->linecommentcolour 	= "green";

// Indent Strings

$this->indent            	= array();
$this->unindent          	= array();

// String characters and delimiters

$this->stringchars       	= array("\"", "'");
$this->delimiters        	= array("+", "@", "(", ")", "[", "]", ":", ";", "\"", "'", " ", ",", "	", "#");
$this->escchar           	= "";

// Comment settings

$this->linecommenton     	= array(";");
$this->blockcommenton    	= array("");
$this->blockcommentoff   	= array("");

// Keywords (keyword mapping to colour number)

$this->keywords          	= array(
			"ACALL" => "1", 
			"ADD" => "1", 
			"ADDC" => "1", 
			"AJMP" => "1", 
			"ANL" => "1", 
			"CJNE" => "1", 
			"CLR" => "1", 
			"CPL" => "1", 
			"DA" => "1", 
			"DEC" => "1", 
			"DIV" => "1", 
			"DJNZ" => "1", 
			"DPTR" => "1", 
			"INC" => "1", 
			"JB" => "1", 
			"JBC" => "1", 
			"JC" => "1", 
			"JMP" => "1", 
			"JNB" => "1", 
			"JNC" => "1", 
			"JNZ" => "1", 
			"JZ" => "1", 
			"LCALL" => "1", 
			"LJMP" => "1", 
			"MOV" => "1", 
			"MOVC" => "1", 
			"MOVX" => "1", 
			"MUL" => "1", 
			"NOP" => "1", 
			"ORL" => "1", 
			"POP" => "1", 
			"PUSH" => "1", 
			"RET" => "1", 
			"RETI" => "1", 
			"RL" => "1", 
			"RLC" => "1", 
			"RR" => "1", 
			"RRC" => "1", 
			"SETB" => "1", 
			"SJMP" => "1", 
			"SUBB" => "1", 
			"SWAP" => "1", 
			"XCH" => "1", 
			"XCHD" => "1", 
			"XRL" => "1", 
			"A" => "2", 
			"AB" => "2", 
			"ACC" => "2", 
			"ADCON0" => "2", 
			"ADCON1" => "2", 
			"ADDATH" => "2", 
			"ADDATL" => "2", 
			"B" => "2", 
			"CCEN" => "2", 
			"CCH1" => "2", 
			"CCH2" => "2", 
			"CCH3" => "2", 
			"CCL1" => "2", 
			"CCL2" => "2", 
			"CCL3" => "2", 
			"CRCH" => "2", 
			"CRCL" => "2", 
			"DIR5" => "2", 
			"DPH" => "2", 
			"DPL" => "2", 
			"DPSEL" => "2", 
			"IEN0" => "2", 
			"IEN1" => "2", 
			"IEN2" => "2", 
			"IP0" => "2", 
			"IP1" => "2", 
			"IRCON" => "2", 
			"P0" => "2", 
			"P1" => "2", 
			"P2" => "2", 
			"P3" => "2", 
			"P4" => "2", 
			"P5" => "2", 
			"P6" => "2", 
			"P7" => "2", 
			"PCON" => "2", 
			"PCON1" => "2", 
			"PSW" => "2", 
			"R0" => "2", 
			"R1" => "2", 
			"R2" => "2", 
			"R3" => "2", 
			"R4" => "2", 
			"R5" => "2", 
			"R6" => "2", 
			"R7" => "2", 
			"SBUF" => "2", 
			"SCF" => "2", 
			"SCIEN" => "2", 
			"SCON" => "2", 
			"SP" => "2", 
			"SRB" => "2", 
			"SRELH" => "2", 
			"SRELL" => "2", 
			"SSCCON" => "2", 
			"SSCMOD" => "2", 
			"STB" => "2", 
			"SYSCON" => "2", 
			"T2CON" => "2", 
			"TCON" => "2", 
			"TH0" => "2", 
			"TH1" => "2", 
			"TH2" => "2", 
			"TL0" => "2", 
			"TL1" => "2", 
			"TL2" => "2", 
			"TMOD" => "2", 
			"WDTREL" => "2", 
			"XPAGE" => "2", 
			"A10" => "3", 
			"A11" => "3", 
			"A12" => "3", 
			"A13" => "3", 
			"A14" => "3", 
			"A15" => "3", 
			"A8" => "3", 
			"A9" => "3", 
			"AC" => "3", 
			"ACC.0" => "3", 
			"ACC.1" => "3", 
			"ACC.2" => "3", 
			"ACC.3" => "3", 
			"ACC.4" => "3", 
			"ACC.5" => "3", 
			"ACC.6" => "3", 
			"ACC.7" => "3", 
			"AD0" => "3", 
			"AD1" => "3", 
			"AD2" => "3", 
			"AD3" => "3", 
			"AD4" => "3", 
			"AD5" => "3", 
			"AD6" => "3", 
			"AD7" => "3", 
			"ADEX" => "3", 
			"ADM" => "3", 
			"ADST" => "3", 
			"BD" => "3", 
			"BSY" => "3", 
			"C" => "3", 
			"CLK" => "3", 
			"CLKOU" => "3", 
			"CY" => "3", 
			"EA" => "3", 
			"EADC" => "3", 
			"ES" => "3", 
			"ET0" => "3", 
			"ET1" => "3", 
			"ET2" => "3", 
			"EX0" => "3", 
			"EX1" => "3", 
			"EX2" => "3", 
			"EX3" => "3", 
			"EX4" => "3", 
			"EX5" => "3", 
			"EX6" => "3", 
			"EXEN2" => "3", 
			"EXF2" => "3", 
			"F0" => "3", 
			"F1" => "3", 
			"I2FR" => "3", 
			"I3FR" => "3", 
			"IADC" => "3", 
			"IE0" => "3", 
			"IE1" => "3", 
			"IEX2" => "3", 
			"IEX3" => "3", 
			"IEX4" => "3", 
			"IEX5" => "3", 
			"IEX6" => "3", 
			"INT0" => "3", 
			"INT1" => "3", 
			"INT2" => "3", 
			"INT3" => "3", 
			"INT4" => "3", 
			"INT5" => "3", 
			"INT6" => "3", 
			"INT8" => "3", 
			"IT0" => "3", 
			"IT1" => "3", 
			"MX0" => "3", 
			"MX1" => "3", 
			"MX2" => "3", 
			"OV" => "3", 
			"P" => "3", 
			"RB8" => "3", 
			"RD" => "3", 
			"REN" => "3", 
			"RI" => "3", 
			"RS0" => "3", 
			"RS1" => "3", 
			"RXD" => "3", 
			"RXDC" => "3", 
			"SCLK" => "3", 
			"SLS" => "3", 
			"SM0" => "3", 
			"SM1" => "3", 
			"SM2" => "3", 
			"SRI" => "3", 
			"STO" => "3", 
			"SWDT" => "3", 
			"T0" => "3", 
			"T1" => "3", 
			"T2" => "3", 
			"T2CM" => "3", 
			"T2EX" => "3", 
			"T2I0" => "3", 
			"T2I1" => "3", 
			"T2PS" => "3", 
			"T2R0" => "3", 
			"T2R1" => "3", 
			"TB8" => "3", 
			"TF0" => "3", 
			"TF1" => "3", 
			"TF2" => "3", 
			"TI" => "3", 
			"TR0" => "3", 
			"TR1" => "3", 
			"TXD" => "3", 
			"TXDC" => "3", 
			"WDT" => "3", 
			"WR" => "3", 
			"$DATE" => "4", 
			"$DEBUG" => "4", 
			"$EJECT" => "4", 
			"$ERRORPRINT" => "4", 
			"$GEN" => "4", 
			"$GENONLY" => "4", 
			"$INCLUDE" => "4", 
			"$LIST" => "4", 
			"$MACRO" => "4", 
			"$MOD51" => "4", 
			"$NODEBUG" => "4", 
			"$NOERRORPRINT" => "4", 
			"$NOGEN" => "4", 
			"$NOLIST" => "4", 
			"$NOMACRO" => "4", 
			"$NOMOD51" => "4", 
			"$NOOBJECT" => "4", 
			"$NOPAGING" => "4", 
			"$NOPRINT" => "4", 
			"$NOREGISTERBANK" => "4", 
			"$NOSYMBOLS" => "4", 
			"$NOXREF" => "4", 
			"$OBJECT" => "4", 
			"$PAGELENGTH" => "4", 
			"$PAGEWIDTH" => "4", 
			"$PAGING" => "4", 
			"$PRINT" => "4", 
			"$REGISTERBANK" => "4", 
			"$RESTORE" => "4", 
			"$SAVE" => "4", 
			"$SYMBOLS" => "4", 
			"$TITLE" => "4", 
			"$XREF" => "4", 
			"#" => "5", 
			"$" => "5", 
			"&" => "5", 
			"(" => "5", 
			")" => "5", 
			"*" => "5", 
			"+" => "5", 
			"," => "5", 
			"-" => "5", 
			":" => "5", 
			"@" => "5", 
			"[" => "5", 
			"]" => "5", 
			"|" => "5", 
			"BIT" => "6", 
			"BSEG" => "6", 
			"CODE" => "6", 
			"CSEG" => "6", 
			"DATA" => "6", 
			"DB" => "6", 
			"DBIT" => "6", 
			"DS" => "6", 
			"DSEG" => "6", 
			"DW" => "6", 
			"END" => "6", 
			"EQU" => "6", 
			"EXTRN" => "6", 
			"IDATA" => "6", 
			"ISEG" => "6", 
			"NAME" => "6", 
			"ORG" => "6", 
			"PUBLIC" => "6", 
			"RSEG" => "6", 
			"SEGMENT" => "6", 
			"SET" => "6", 
			"USING" => "6", 
			"XDATA" => "6", 
			"XSEG" => "6", 
			"AND" => "7", 
			"EQ" => "7", 
			"GE" => "7", 
			"GT" => "7", 
			"HIGH" => "7", 
			"LE" => "7", 
			"LOW" => "7", 
			"LT" => "7", 
			"MOD" => "7", 
			"NE" => "7", 
			"NOT" => "7", 
			"OR" => "7", 
			"SHL" => "7", 
			"SHR" => "7", 
			"XOR" => "7");

// Special extensions

// Each category can specify a PHP function that returns an altered
// version of the keyword.
        
        

$this->linkscripts    	= array(
			"1" => "donothing", 
			"2" => "donothing", 
			"3" => "donothing", 
			"4" => "donothing", 
			"5" => "donothing", 
			"6" => "donothing", 
			"7" => "donothing");
}


function donothing($keywordin)
{
	return $keywordin;
}

}?>
