<?php

use Illuminate\Database\Seeder;
use App\Indicador;
use App\Categoria;
use App\Instrumento;

class InstrumentosPredeterminados extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indicadores[0]=array(
            "¿Ha tenido experiencia participando en otros Entornos Virtuales de Aprendizaje en la UCV?",
            "¿Dispone de un computador?",
            "¿Dispone de acceso a internet que le permita participar en el Entorno Virtual de Aprendizaje?",
            "¿Dispones un dispositivo móvil inteligente con acceso a internet?",
        );
        $indicadores[1]=array(
            "El docente informa sobre el perfil de ingreso, requerimientos académicos y técnicos necesarios para participar en el Entorno Virtual de Aprendizaje.",
            "Se realizan planes de inducción, preparación y apoyo a los estudiantes para participar en el Entorno Virtual de Aprendizaje.",
            "Se promueve la interacción entre estudiantes a lo largo de las actividades del Entorno Virtual de Aprendizaje.",
            "Se promueve la interacción entre estudiantes y docentes a lo largo de las actividades del Entorno Virtual de Aprendizaje.",
            "Se utilizan repositorios digitales, bibliotecas virtuales y recursos educativos abiertos.",
            "Se realizan análisis para medir el grado de satisfacción de los estudiantes.",
            "Se presentan los criterios y procedimientos de evaluación de los aprendizajes acordes a la modalidad.",
            "Se diseñan actividades accesibles para todos (inclusión de personas con discapacidad).",
            "Se hace uso de políticas y actividades que permitan la inclusión de todos los estudiantes.",
            "Se promueve el trabajo independiente para todos.",
            "Se dispone de planes de tutoría y atención a los estudiantes y apoyo en el proceso de aprendizaje.",
        );
        $indicadores[2]=array(   
            "Se dispone de medios alternativos para publicar los contenidos y realización de actividades para estudiantes que no disponen de acceso permanente a internet o de conexiones de baja velocidad.",
            "Se presenta toda la información necesaria al estudiantado para su participación en el Entorno Virtual de Aprendizaje, tal como objetivos, competencias, contenidos, actividades, evaluación.",
            "Los docentes usan estrategias de acompañamiento a los estudiantes en los procesos de enseñanza y aprendizaje.",
            "Los contenidos son vigentes, actualizados y acordes a los estudiantes, así como también, coherente con los objetivos y competencias del Entorno Virtual de Aprendizaje.",
            "Se fomenta la utilización de licencias (creative commons, copyright, entre otras) para la publicación de los contenidos en el Entorno Virtual de Aprendizaje.",
            "Se consideran e incorporan las tendencias e innovaciones en EaD.",
        );
        $indicadores[3]=array(   
            "El Campus Virtual UCV cumple los estándares de accesibilidad para que cualquier usuario pueda tener acceso."
        );
        $indicadores[4]=array(   
            "El acceso al Campus Virtual UCV está disponible las 24 horas los 7 días de la semana.",
            "El Sistema de Educación a Distancia de la UCV cuenta con personal calificado para soporte técnico y ayuda a los docentes y estudiantes.",
            "El Sistema de Educación a Distancia de la UCV dispone de personal especializado para ofrecer espacios de atención y asesoría técnica a estudiantes con discapacidad.",
            "El Campus Virtual UCV tiene organización y un diseño homogéneo que facilita la navegación en el curso en línea."
        );

        //Indicadores Docente
        $indicadores[5]=array(
            "El Docente evidencia experiencia en la modalidad de EaD.",
            "Se presenta el diseño instruccional del Entorno Virtual de Aprendizaje adaptado a la modalidad a EaD.",
        );
        $indicadores[6]=array(
            "El Sistema de Educación a Distancia de la UCV ofrece un sistema para respaldar los datos de los cursos en línea y sus usuarios."
        );

        $categorias=array(
            "Perfil de Usuario"                         => "Dimensión Perfil de Usuario",
            "Componente Estudiantil"                    => "Dimensión Académica - Componente Estudiantil",
            "Componente Docencia"                       => "Dimensión Académica - Componente Docencia",
            "Componente Infraestructura Tecnológica"    => "Dimensión Tecnológica - Componente Plataforma e Infraestructura Tecnológica",
            "Componente Campus Virtual"                 => "Dimensión Tecnológica - Componente Campus Virtual y Herramientas Tecnológicas",
        );
        $categorias2=array(  
            "Componente Docencia"                       => "Dimensión Académica - Componente Docencia (Docentes)",
            "Componente Campus Virtual"                 => "Dimensión Tecnológica - Componente Campus Virtual y Herramientas Tecnológicas (Docentes)",
        );

        $list_categorias1=array(
            "Perfil de Usuario"                         => "Dimensión Perfil de Usuario",
            "Componente Estudiantil"                    => "Dimensión Académica - Componente Estudiantil",
            "Componente Docencia"                       => "Dimensión Académica - Componente Docencia",
            "Componente Infraestructura Tecnológica"    => "Dimensión Tecnológica - Componente Plataforma e Infraestructura Tecnológica",
            "Componente Campus Virtual"                 => "Dimensión Tecnológica - Componente Campus Virtual y Herramientas Tecnológicas",
        );

        $list_categorias2=array(
            "Perfil de Usuario"                         => "Dimensión Perfil de Usuario",
            "Componente Estudiantil"                    => "Dimensión Académica - Componente Estudiantil",
            "Componente Docencia"                       => "Dimensión Académica - Componente Docencia (Docentes)",
            "Componente Infraestructura Tecnológica"    => "Dimensión Tecnológica - Componente Plataforma e Infraestructura Tecnológica",
            "Componente Campus Virtual"                 => "Dimensión Tecnológica - Componente Campus Virtual y Herramientas Tecnológicas (Docentes)",
        );

        $list_instrumentos = array(
            array(
                "nombre"        =>"Instrumento de Evaluación de Entornos Virtuales de Aprendizaje del Campus Virtual de la Universidad Central de Venezuela desde la perspectiva de los Estudiantes.",
                "nombre_corto"  =>"Curso como Estudiante",
                "descripcion"   =>"El presente instrumento está diseñado para realizar la Evaluación de los Entornos Virtuales de Aprendizaje del Campus Virtual-UCV dirigido a los estudiantes de la Universidad. Está conformado por tres (3) secciones a saber: Perfil de Usuario, Dimensión Académica, Dimensión Tecnológica; con un total de veintidós (22) interrogantes. Mediante este instrumento se determinará en qué nivel el EVA responde satisfactoriamente a cada uno de los aspectos evaluados desde las respectivas dimensiones. Con el objeto de medir y analizar el servicio que se presta a través de esta plataforma"),
            array(
                "nombre"        =>"Instrumento de Evaluación de Entornos Virtuales de Aprendizaje del Campus Virtual de la Universidad Central de Venezuela desde la perspectiva de los Docentes.",
                "nombre_corto"  =>"Curso como Docente",
                "descripcion"   =>"El presente instrumento está diseñado para realizar la Evaluación de los Entornos Virtuales de Aprendizaje del Campus Virtual-UCV dirigido a los estudiantes de la Universidad. Está conformado por tres (3) secciones a saber: Perfil de Usuario, Dimensión Académica, Dimensión Tecnológica; con un total de veintidós (22) interrogantes. Mediante este instrumento se determinará en qué nivel el EVA responde satisfactoriamente a cada uno de los aspectos evaluados desde las respectivas dimensiones. Con el objeto de medir y analizar el servicio que se presta a través de esta plataforma")
        );

        //Agregamos los indicadores
        foreach($indicadores as $Grupoindicadores){
            foreach($Grupoindicadores as $indicador){
                $indicador = Indicador::firstOrCreate(['nombre' => $indicador]);  
            }
        }
        //Agregamos las categorías
        foreach($categorias as $nombreCorto => $categoria){
            $actual = Categoria::firstOrNew(['nombre' => $categoria]);
            if (!$actual->exists) {
                $actual->fill([
                        'nombre_corto' => $nombreCorto,
                    ])->save();
            }
        }
        foreach($categorias2 as $nombreCorto => $categoria){
            $actual = Categoria::firstOrNew(['nombre' => $categoria]);
            if (!$actual->exists) {
                $actual->fill([
                        'nombre_corto' => $nombreCorto,
                    ])->save();
            }
        }

        //Agregamos los instrumentos
        foreach($list_instrumentos as  $instrumento){
            $instrumento = Instrumento::firstOrCreate([
                'nombre'        => $instrumento['nombre'],
                'nombre_corto'  => $instrumento['nombre_corto'],
                'descripcion'   => $instrumento['descripcion'],
                ]);
        }

        //Attacch indicadores - categorias
        foreach($categorias as $nombreCorto => $categoria){
            $actual = Categoria::firstOrNew(['nombre' => $categoria]);
            if ($actual->exists) {
                
                if ($actual->nombre == "Dimensión Perfil de Usuario") {
                    foreach($indicadores[0] as $indicador){
                        $indicador = Indicador::where(['nombre' => $indicador])->first() ; 
                        $actual->indicadores()->attach($indicador);
                    }
                }

                if ($actual->nombre == "Dimensión Académica - Componente Estudiantil") {
                    foreach($indicadores[1] as $indicador){
                        $indicador = Indicador::where(['nombre' => $indicador])->first() ; 
                        $actual->indicadores()->attach($indicador);
                    }
                }

                if ($actual->nombre == "Dimensión Académica - Componente Docencia") {
                    foreach($indicadores[2] as $indicador){
                        $indicador = Indicador::where(['nombre' => $indicador])->first() ; 
                        $actual->indicadores()->attach($indicador);
                    }
                }

                if ($actual->nombre == "Dimensión Tecnológica - Componente Plataforma e Infraestructura Tecnológica") {
                    foreach($indicadores[3] as $indicador){
                        $indicador = Indicador::where(['nombre' => $indicador])->first() ; 
                        $actual->indicadores()->attach($indicador);
                    }
                }

                if ($actual->nombre == "Dimensión Tecnológica - Componente Campus Virtual y Herramientas Tecnológicas") {
                    foreach($indicadores[4] as $indicador){
                        $indicador = Indicador::where(['nombre' => $indicador])->first() ; 
                        $actual->indicadores()->attach($indicador);
                    }
                }

            }
        }

        foreach($categorias2 as $nombreCorto => $categoria){
            $actual = Categoria::firstOrNew(['nombre' => $categoria]);
            if ($actual->exists) {

                if ($actual->nombre == "Dimensión Académica - Componente Docencia (Docentes)") {
                    foreach($indicadores[2] as $indicador){
                        $indicador = Indicador::where(['nombre' => $indicador])->first() ; 
                        $actual->indicadores()->attach($indicador);
                    }
                    
                    foreach($indicadores[5] as $indicador){
                        $indicador = Indicador::where(['nombre' => $indicador])->first() ; 
                        $actual->indicadores()->attach($indicador);
                    }
                }

                if ($actual->nombre == "Dimensión Tecnológica - Componente Campus Virtual y Herramientas Tecnológicas (Docentes)") {
                    foreach($indicadores[4] as $indicador){
                        $indicador = Indicador::where(['nombre' => $indicador])->first() ; 
                        $actual->indicadores()->attach($indicador);
                    }
                    
                    foreach($indicadores[6] as $indicador){
                        $indicador = Indicador::where(['nombre' => $indicador])->first() ; 
                        $actual->indicadores()->attach($indicador);
                    }
                }
            }
        }

        //Attacch categorias - instrumentos
        foreach($list_instrumentos as $nombreCorto => $instrumento){
            $instrumento = Instrumento::firstOrNew(['nombre' => $instrumento]);
            $categoria = Categoria::firstOrNew(['nombre' => $categoria]);
            if ($instrumento->exists) {
                
                if ($instrumento->nombre == "Instrumento de Evaluación de Entornos Virtuales de Aprendizaje del Campus Virtual de la Universidad Central de Venezuela desde la perspectiva de los Estudiantes.") {
                    foreach($list_categorias1 as $categoria){
                        $categoria = Categoria::where(['nombre' => $categoria])->first() ; 
                        $instrumento->categorias()->attach($categoria);
                    }
                }else if($instrumento->nombre == "Instrumento de Evaluación de Entornos Virtuales de Aprendizaje del Campus Virtual de la Universidad Central de Venezuela desde la perspectiva de los Docentes.") {
                    foreach($list_categorias2 as $categoria){
                        $categoria = Categoria::where(['nombre' => $categoria])->first() ; 
                        $instrumento->categorias()->attach($categoria);
                    }

                }
            }
        }

    }
}