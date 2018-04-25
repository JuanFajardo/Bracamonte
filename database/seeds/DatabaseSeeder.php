<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(){
        // $this->call(UsersTableSeeder::class);
        \DB::table('users')->insert(array('id'=>'2','username'=>'bett0',  'password'=> \Hash::make('123'), 'nombres'=>'Juan Fajardo', 'grupo'=>'1', 'login'=>'1'));

        \DB::table('empresas')->insert(array('id'=>'1','empresa'=>'PRUEBA',  'celular'=>'78787878', 'direccion'=>'Calle A', 'representante'=>'CARLOS PEREZ'));
        
        \DB::table('boletas')->insert(array('id'=>'1','boleta'=>'Boleta Garantia',  'descripcion'=>'Boleta Garantia'));

        \DB::table('empleados')->insert(array('id'=>'1','empleado'=>'MARY EMILIA MORALES VELASQUEZ',  'celular'=>'71834487', 'cargo'=>'DIRECTOR DE AUDITORIA INTERNA'));
        \DB::table('empleados')->insert(array('id'=>'2','empleado'=>'ANTONIO JESUS BOBARIN PACO',  'celular'=>'72445690', 'cargo'=>'DIRECTOR (A) DE CULTURA'));
        \DB::table('empleados')->insert(array('id'=>'3','empleado'=>'MILTON NINA CANAVIRI',  'celular'=>'72382281', 'cargo'=>'JEFE DPTO. ADM. BIENES Y MATERIALES'));
        \DB::table('empleados')->insert(array('id'=>'4','empleado'=>'JULIANE ANGIE MULLER SEBORGA',  'celular'=>'70471502', 'cargo'=>'DIRECTOR (A) DE CULTURA'));
        \DB::table('empleados')->insert(array('id'=>'5','empleado'=>'MARTHA CONDORI CKACKA',  'celular'=>'68380512', 'cargo'=>'JEFE DPTO. ASUNTOS DE GENERO Y GENERACIONALES'));
        \DB::table('empleados')->insert(array('id'=>'6','empleado'=>'DAVID MAMANI QUISPE',  'celular'=>'72447246', 'cargo'=>'DIRECTOR DE FINANZAS'));
        \DB::table('empleados')->insert(array('id'=>'7','empleado'=>'BRAULIO CONDORI GUTIERRES',  'celular'=>'72391111', 'cargo'=>'JEFE DPTO.MANTENIMIENTO Y SERVICIOS'));
        \DB::table('empleados')->insert(array('id'=>'8','empleado'=>'MARIO JESUS CENTELLAS VIDAL',  'celular'=>'70453054', 'cargo'=>'JEFE DEPARTAMENTO DE FISCALIZACION'));
        \DB::table('empleados')->insert(array('id'=>'9','empleado'=>'BISMARK ALEXANDER CONTRERAS QUICHU',  'celular'=>'73868688', 'cargo'=>'DIRECTOR '));
        \DB::table('empleados')->insert(array('id'=>'10','empleado'=>'SHIRLEY MARCELA JAMES  ',  'celular'=>'72430773', 'cargo'=>'JEFE PROM. TURIS. CONTROL DE CALIDAD'));
        \DB::table('empleados')->insert(array('id'=>'11','empleado'=>'GUNAR GONZALO LOPEZ ESPINOZA',  'celular'=>'72893272', 'cargo'=>'JEFE DE REGISTROS'));
        \DB::table('empleados')->insert(array('id'=>'12','empleado'=>'MATEO VERA SOLARES',  'celular'=>'', 'cargo'=>'JEFE DE DEPARTAMENTO TRAFICO Y VIALIDAD'));
        \DB::table('empleados')->insert(array('id'=>'13','empleado'=>'RAUL HUASCAR TORREZ MIRANDA',  'celular'=>'79431702', 'cargo'=>'JEFE DE DEPARTAMENTO'));
        \DB::table('empleados')->insert(array('id'=>'14','empleado'=>'RUBEN MOISES MIRANDA CASTRO',  'celular'=>'65499009', 'cargo'=>'DIRECTOR ASESORIA LEGAL'));
        \DB::table('empleados')->insert(array('id'=>'15','empleado'=>'RAUL ACHO PORTILLO',  'celular'=>'72415053', 'cargo'=>'DIRECTOR DE FINANZAS'));
        \DB::table('empleados')->insert(array('id'=>'16','empleado'=>'KARLA IVANNA ANDIA FLORES',  'celular'=>'73763858', 'cargo'=>'JEFE DE DPTO.  DE PROMOCION PARA LA INVE.  Y PARTICIPACION'));
        \DB::table('empleados')->insert(array('id'=>'17','empleado'=>'LUIS MIRANDA ESCARCHA',  'celular'=>'70454773', 'cargo'=>'DIRECTOR DE RECURSOS HUMANOS'));
        \DB::table('empleados')->insert(array('id'=>'18','empleado'=>'POLDARK PERCYBAL SOTO QUISPE',  'celular'=>'72884143', 'cargo'=>'JEFE DPTO. CATASTRO URBANO'));
        \DB::table('empleados')->insert(array('id'=>'19','empleado'=>'RODRIGO QUISPE VILLCA',  'celular'=>'70334632', 'cargo'=>'JEFE DE DEPARTAMENTO'));
        \DB::table('empleados')->insert(array('id'=>'20','empleado'=>'EDWIN OROPEZA TORREJON',  'celular'=>'72872032', 'cargo'=>'JEFE PROM. TURIS. CONTROL DE V'));
        \DB::table('empleados')->insert(array('id'=>'21','empleado'=>'ROBERTO RAMIREZ MURILLO',  'celular'=>'', 'cargo'=>'JEFE DPTO.MANTENIMIENTO Y SERVICIOS'));
        \DB::table('empleados')->insert(array('id'=>'22','empleado'=>'JOSE HUANCA HUARACHI',  'celular'=>'72482966', 'cargo'=>'JEFE DEPTO DE CONTROL URBANO'));
        \DB::table('empleados')->insert(array('id'=>'23','empleado'=>'FLORA COLQUE CALIZAYA',  'celular'=>'67906400', 'cargo'=>'JEFE DPTO. DE CONTABILIDAD'));
        \DB::table('empleados')->insert(array('id'=>'24','empleado'=>'EUNICE KAREN CRUZ SAAVEDRA',  'celular'=>'72446107', 'cargo'=>'JEFE DPTO. ASUNTOS DE GENERO Y GENERACIONALES'));
        \DB::table('empleados')->insert(array('id'=>'25','empleado'=>'JERENY LIDIA OTALORA GUTIERREZ',  'celular'=>'67908781', 'cargo'=>'JEFE CONTROL DE  UNIDADES  EDUCATIVAS'));
        \DB::table('empleados')->insert(array('id'=>'26','empleado'=>'ROSARIO NAYRA MONTERO SOSSA',  'celular'=>'78629276', 'cargo'=>'JEFE DEPARTAMENTO DE PLANIFICION MUNICIPAL'));
        \DB::table('empleados')->insert(array('id'=>'27','empleado'=>'GERALDINE ALEJANDRA POVEDA RIOS',  'celular'=>'72434701', 'cargo'=>'JEFE PROM. TURIS. CONTROL DE CALIDAD'));
        \DB::table('empleados')->insert(array('id'=>'28','empleado'=>'RUTH PAZ HEREDIA',  'celular'=>'78621557', 'cargo'=>'JEFE DEPARTAMENTO DE PLANIFICION MUNICIPAL'));
        \DB::table('empleados')->insert(array('id'=>'29','empleado'=>'CESAR PABLO DELGADO PEREZ',  'celular'=>'68420823', 'cargo'=>'JEFE DPTO. PRESUPUESTOS'));
        \DB::table('empleados')->insert(array('id'=>'30','empleado'=>'BEYMAR ROLLANO SOSSA',  'celular'=>'72884640', 'cargo'=>'JEFE DEPTO. ADQ. LICITAC. Y CONTRATOS'));
        \DB::table('empleados')->insert(array('id'=>'31','empleado'=>'JUAN JOSE BASPINEIRO AVILES',  'celular'=>'72412777', 'cargo'=>'JEFE DE PROMOCION CULTURAL'));
        \DB::table('empleados')->insert(array('id'=>'32','empleado'=>'JORGE DIEGO VELASQUEZ GUZMAN',  'celular'=>'76160129', 'cargo'=>'DIRECTOR DE DESARROLLO HUMANO'));
        \DB::table('empleados')->insert(array('id'=>'33','empleado'=>'PRUDENCIO MAMANI VILLANUEVA',  'celular'=>'73856577', 'cargo'=>'JEFE DPTO. PRESUPUESTOS'));
        \DB::table('empleados')->insert(array('id'=>'34','empleado'=>'RAMIRO AYAVIRI MAMANI',  'celular'=>'72440648', 'cargo'=>'JEFE DPTO. PRESUPUESTOS'));
        \DB::table('empleados')->insert(array('id'=>'35','empleado'=>'ROLANDO MONTECINOS CAZORLA',  'celular'=>'69610557', 'cargo'=>'DIRECTOR DE SUPERVISION Y FISCALIZACION DEPROYECTOS'));
        \DB::table('empleados')->insert(array('id'=>'36','empleado'=>'PATRICIA CELIA VARGAS LOAYZA',  'celular'=>'72432262', 'cargo'=>'JEFE DE DEPTO. REG. DE CONTROL DE PLANILLAS'));
        \DB::table('empleados')->insert(array('id'=>'37','empleado'=>'BEATRIZ CORS IBAÑEZ',  'celular'=>'72421403', 'cargo'=>'JEFE DEPTO. DE TRAMITES INTERNOS'));
        \DB::table('empleados')->insert(array('id'=>'38','empleado'=>'MIGUEL ANGEL SALAMANCA MAMANI',  'celular'=>'72433204', 'cargo'=>'JEFE DE DEPTO. DE METODOS Y SISTEMAS'));
        \DB::table('empleados')->insert(array('id'=>'39','empleado'=>'PATRICIA GAMARRA VILLALBA',  'celular'=>'73890515', 'cargo'=>'JEFE DE REGISTROS'));
        \DB::table('empleados')->insert(array('id'=>'40','empleado'=>'MARLENE RUTH CHUMACERO REYNAGA',  'celular'=>'72398351', 'cargo'=>'JEFE DE DEPTO. DE METODOS Y SISTEMAS'));
        \DB::table('empleados')->insert(array('id'=>'41','empleado'=>'VICTOR HUGO CLAROS SILES',  'celular'=>'67900250', 'cargo'=>'JEFE DPTO. POLICIA MUNICIPAL'));
        \DB::table('empleados')->insert(array('id'=>'42','empleado'=>'ROSALIN FRANCISCA AGUIRRE MENACHO',  'celular'=>'67052052', 'cargo'=>'DIRECTOR DE TURISMO'));
        \DB::table('empleados')->insert(array('id'=>'43','empleado'=>'CELIN LUIS SALAS MEDRANO',  'celular'=>'77478868', 'cargo'=>'DIRECTOR DE SEGURIDAD CIUDADANA'));
        \DB::table('empleados')->insert(array('id'=>'44','empleado'=>'HERNAN MAMANI GUTIERREZ',  'celular'=>'72445653', 'cargo'=>'JEFE DE DEPTO. DE METODOS Y SISTEMAS'));
        \DB::table('empleados')->insert(array('id'=>'45','empleado'=>'HUMBERTO RAMOS YUCRA',  'celular'=>'76168757', 'cargo'=>'DIRECTOR DE FINANZAS'));
        \DB::table('empleados')->insert(array('id'=>'46','empleado'=>'LIZETH YURASE VILLCA PACA',  'celular'=>'73898612', 'cargo'=>'DIRECTOR DE RECURSOS HUMANOS'));
        \DB::table('empleados')->insert(array('id'=>'47','empleado'=>'JUAN CORREA ALEJO',  'celular'=>'72402923', 'cargo'=>'DIRECTOR DE SUPERVISION Y FISCALIZACION DEPROYECTOS'));
        \DB::table('empleados')->insert(array('id'=>'48','empleado'=>'JUSTINO VILLANUEVA JANCKO',  'celular'=>'77869697', 'cargo'=>'JEFE DE DPTO DE FORESTACION Y AREAS VERDES'));
        \DB::table('empleados')->insert(array('id'=>'49','empleado'=>'HERNAN HUGO ILLANES SORIANO',  'celular'=>'77479017', 'cargo'=>'JEFE DEPTO.DE OBRAS CVILES PAV.ACCION COMUNAL'));
        \DB::table('empleados')->insert(array('id'=>'50','empleado'=>'MARIA LUZ FLORES MOLLINEDO',  'celular'=>'67925690', 'cargo'=>'DIRECTOR ASESORIA LEGAL'));
        \DB::table('empleados')->insert(array('id'=>'51','empleado'=>'ELIZABETH SORAYA MENDOZA FLORES',  'celular'=>'', 'cargo'=>'DIRECTOR ASESORIA LEGAL'));
        \DB::table('empleados')->insert(array('id'=>'52','empleado'=>'YASMANI DANIEL ANCE FUERTES',  'celular'=>'70452317', 'cargo'=>'JEFE DE PROMOCION CULTURAL'));
        \DB::table('empleados')->insert(array('id'=>'53','empleado'=>'SHEILA BRIGIDA BELTRAN LOPEZ',  'celular'=>'76160607', 'cargo'=>'DIRECTOR (A) DE CULTURA'));
        \DB::table('empleados')->insert(array('id'=>'54','empleado'=>'ANGELICA MICHEL CHOQUE',  'celular'=>'71834341', 'cargo'=>'JEFE DPTO. ADM. BIENES Y MATERIALES'));
        \DB::table('empleados')->insert(array('id'=>'55','empleado'=>'WILBER CRUZ ALCARAZ',  'celular'=>'69611528', 'cargo'=>'JEFE DE DEPARTAMENTO'));
        \DB::table('empleados')->insert(array('id'=>'56','empleado'=>'MARCO ANTONIO MONTOYA PORTILLO',  'celular'=>'72412181', 'cargo'=>'JEFE DEPTO. TESORERIA'));
        \DB::table('empleados')->insert(array('id'=>'57','empleado'=>'DAVID JUAN LIMACHI MENDEZ',  'celular'=>'72429123', 'cargo'=>'JEFE LUCHA CONTRA LA CORRUPCION'));
        \DB::table('empleados')->insert(array('id'=>'58','empleado'=>'ISRAEL IGNACIO BENAVIDEZ',  'celular'=>'72411286', 'cargo'=>'DIRECTOR DE DESARROLLO ECONOMICO Y SOCIAL'));
        \DB::table('empleados')->insert(array('id'=>'59','empleado'=>'JORGE GUSTAVO VARGAS ARANCIBIA',  'celular'=>'69620189', 'cargo'=>'DIRECTOR DE OBRAS'));
        \DB::table('empleados')->insert(array('id'=>'60','empleado'=>'HECTOR EDUARDO MARTINEZ REVOLLO',  'celular'=>'', 'cargo'=>'DIRECTOR DE AUDITORIA INTERNA'));
        \DB::table('empleados')->insert(array('id'=>'61','empleado'=>'HENRY OLMOS GUMIEL',  'celular'=>'69630141', 'cargo'=>'JEFE DE DEPARTAMENTO TRAFICO Y VIALIDAD'));
        \DB::table('empleados')->insert(array('id'=>'62','empleado'=>'VLADIMIR NELSON VARGAS GOMEZ',  'celular'=>'76167704', 'cargo'=>'JEFE DE PTO DE PROYECTOS URBANOS AMB.'));
        \DB::table('empleados')->insert(array('id'=>'63','empleado'=>'MARIO MARTINEZ PORTUGAL',  'celular'=>'77737457', 'cargo'=>'JEFE DE DPTO DE FORESTACION Y AREAS VERDES'));
        \DB::table('empleados')->insert(array('id'=>'64','empleado'=>'MARIA DOLORES RODRIGUEZ ESTRADA',  'celular'=>'', 'cargo'=>'JEFE DPTO. ADM. BIENES Y MATERIALES'));
        \DB::table('empleados')->insert(array('id'=>'65','empleado'=>'ROSSEMARY CAZAS SAAVEDRA',  'celular'=>'72395323', 'cargo'=>'JEFE DEL DEPARTAMENTO DE LIQUIDACIONES'));
        \DB::table('empleados')->insert(array('id'=>'66','empleado'=>'INES HERMINIA QUISPE ROJAS',  'celular'=>'73892222', 'cargo'=>'JEFE DEPTO. ADQ. LICITAC. Y CONTRATOS'));
        \DB::table('empleados')->insert(array('id'=>'67','empleado'=>'RAUL ISLA PACO',  'celular'=>'73859708', 'cargo'=>'DIRECTOR DE MANTENIMIENTO Y MEJORAMIENTO DE VIAS'));
        \DB::table('empleados')->insert(array('id'=>'68','empleado'=>'GONZALO ZEGARRA CRUZ',  'celular'=>'73863439', 'cargo'=>'JEFE CONTROL DE  UNIDADES  EDUCATIVAS'));
        \DB::table('empleados')->insert(array('id'=>'69','empleado'=>'JUAN PABLO CARREÑO CHOQUEVILLQUE',  'celular'=>'77681804', 'cargo'=>'JEFE DEL DEPARTAMENTO DE SALUD'));
        \DB::table('empleados')->insert(array('id'=>'70','empleado'=>'MARCO ANTONIO VELASQUEZ ARDAYA',  'celular'=>'76424631', 'cargo'=>'JEFE DE DPTO DE FORESTACION Y AREAS VERDES'));


    }
}
