<?php

$Lang = "es";
$Description = "Bienes raíces accesibles y con propósito. Inversiones inmobiliarias desde $250 USD, educación financiera y comunidad global para transformar tu vida y construir libertad.";
$Keywords = "bienes raíces, inversión inmobiliaria, terrenos accesibles, educación financiera, comunidad global, libertad financiera, plusvalía, sostenibilidad, patrimonio";

//-------------------------//
// Menu
//-------------------------//

$Menu_01 = "Inicio";
$Menu_02 = $Company_Fullname;
$Menu_03 = "Estatus";
$Menu_04 = "Productos";
$Menu_05 = "Tienda";

$Menu_log = "Login";
$Menu_reg = "Regístrate";

//-------------------------//
// Btn
//-------------------------//

$Btn_view = "Ver más";
$Btn_buy = "Empieza HOY";
$Btn_start = "Únete hoy";
$Btn_store = "Visita nuestra tienda";
$Btn_live = "Empieza ya";
$Btn_part = "Inicia HOY";
$Btn_started = "Descrubre {$Company_Name}";
$Btn_founder = "Comprar lote";

//-------------------------//
// Coming Soon
//-------------------------//

$Soon_Text = "Próximamente";
$Soon_Description1 = "Este domingo 7 de septiembre";
$Soon_Description2 = "Conéctate en Zoom 07:00 p.m. (CDMX)";
$Soon_Description3 = "¡No te lo puedes perder!";

//-------------------------//
// Not found
//-------------------------//

$notFound = "Lo sentimos, la página no existe.";
$notFound_btn = "Volver al inicio";

//-------------------------//
// Hero
//-------------------------//

$Hero_01 = "Tu tierra. Tu futuro.<br/>Tu libertad.";
$Hero_02 = "Terrenos con plusvalía real desde $250 USD dentro de una comunidad global que crece contigo.";

//-------------------------//
// About
//-------------------------//

$Mission_title = "Misión";
$Mission_text = "Abrir las puertas de la inversión inmobiliaria para todas las personas, ofreciendo terrenos con plusvalía y un modelo de ingresos que transforma vidas. Educamos para que cada miembro tome mejores decisiones y construya libertad financiera.";
$Vission_title = "Visión";
$Vission_text = "Convertirnos en la comunidad que democratizó el acceso a terrenos con vistas inigualables impulsando un movimiento sostenible y accesible en toda Latinoamérica.";
$Values_title = "Valores";
$Values_1 = "Inclusión";
$Values_2 = "Sostenibilidad";
$Values_3 = "Educación";
$Values_4 = "Comunidad";
$Values_5 = "Innovación";

//-------------------------//
// Journey
//-------------------------//

$Journey_title = "Tu inversión transforma todo";

$Journey_button_1 = "Terrenos que sí puedes pagar";
$Journey_button_2 = "Aprendizaje que cambia tu economía";
$Journey_button_3 = "Una comunidad que te impulsa";
$Journey_button_4 = "Impacto real y sostenible";

$Journey_text_1 = "El sueño de tener tierra propia ya no es un lujo. Aquí comienzas desde $250 USD.";
$Journey_text_2 = "Educación ambiental, financiera y digital para transformar tu mentalidad y tus resultados.";
$Journey_text_3 = "Personas que avanzan contigo, te acompañan y celebran tus metas.";
$Journey_text_4 = "Cada terreno adquirido suma a un ecosistema más consciente y responsable.";

//-------------------------//
// Letters
//-------------------------//

$Letters_title = "Academia {$Company_Name}";

$Letters_title_01 = "Modelo único";
$Letters_text_01 = "Bienes raíces + ingresos residuales.";

$Letters_title_02 = "Accesible para todos";
$Letters_text_02 = "Comienza desde $250 USD.";

$Letters_title_03 = "Terrenos verificables";
$Letters_text_03 = "Plusvalía real, no promesas vacías.";

$Letters_title_04 = "Educación continua";
$Letters_text_04 = "Aprende a invertir y crecer.";

$Letters_title_05 = "Comunidad global";
$Letters_text_05 = "Personas con propósito y visión.";

//-------------------------//
// Vision
//-------------------------//

$Vision_text = "Construye patrimonio sin endeudarte y empieza a transformar tu vida";

$Vision_title_01 = "Terrenos accesibles";
$Vision_text_01 = "Desde $250 USD";

$Vision_title_02 = "Plusvalía con propósito";
$Vision_text_02 = "Tu dinero trabaja conectado a la Tierra.";

$Vision_title_03 = "Comunidad con visión";
$Vision_text_03 = "No estás solo; aquí avanzas acompañado.";

$Vision_title_04 = "Crecimiento total";
$Vision_text_04 = "Personal, financiero y ambiental.";


//-------------------------//
// Slogan
//-------------------------//

$Slogan_title = "Personas transformando su realidad";
$Slogan_text = "Miles ya están invirtiendo de forma consciente, construyendo patrimonio y encontrando libertad en la Tierra.";

//-------------------------//
// Products
//-------------------------//

$Products_sec_title = "¿Dónde quieres comenzar?";

$Products_title_01 = "Estatus bronce";
$Products_text_01 = sprintf("%s m², pago inicial $%s",
  $Investments['bronze']['area'],
  formatCurrency($Investments['bronze']['amount'])
);

$Products_title_02 = "Estatus plata";
$Products_text_02 = sprintf("%s m², pago inicial $%s",
  $Investments['silver']['area'],
  formatCurrency($Investments['silver']['amount'])
);

$Products_title_03 = "Estatus oro";
$Products_text_03 = sprintf("%s m², pago inicial $%s",
  $Investments['gold']['area'],
  formatCurrency($Investments['gold']['amount'])
);

$Products_title_04 = "Estatus diamante";
$Products_text_04 = sprintf("%s m² y %s m², pago inicial $%s",
  $Investments['diamond']['area'],
  $Investments['diamond']['area2'],
  formatCurrency($Investments['diamond']['amount'])
);

//-------------------------//
// Testimonials
//-------------------------//

$Testimonials_title = "Testimonios";
$Testimonial1 = "Acceder a un terreno propio siempre se sintió lejano. Con XTERRARE encontré una oportunidad real y una comunidad que comparte propósito y crecimiento.";
$Testimonial2 = "Llegué buscando una inversión accesible y encontré mucho más: educación, claridad y un proyecto que respeta la Tierra. XTERRARE me dio una nueva visión del futuro.";
$Testimonial3 = "XTERRARE me permitió comenzar a construir patrimonio desde cero. Lo más valioso es sentir que formo parte de una comunidad global comprometida con el planeta.";
$Testimonial4 = "Invertir en XTERRARE fue una decisión que cambió mi vida. No solo adquirí un terreno, sino que también aprendí a gestionar mis finanzas y a pensar en un futuro sostenible.";
$Testimonial5 = "La combinación de terrenos accesibles y educación continua hizo que XTERRARE fuera la opción perfecta para mí. Ahora veo un futuro lleno de posibilidades y crecimiento.";
$Testimonial6 = "XTERRARE no es solo una inversión inmobiliaria, es un movimiento hacia un estilo de vida más consciente. Estoy orgulloso de ser parte de esta comunidad que valora el crecimiento personal y ambiental.";

//-------------------------//
// Truth
//-------------------------//

$Truth_title_01 = "Futuro";
$Truth_text_01 = "El mejor momento para construirlo es hoy.";

$Truth_title_02 = "Sustentabilidad";
$Truth_text_02 = "Terrenos y ecosistemas que respetan la Tierra.";

$Truth_title_03 = "Crecimiento";
$Truth_text_03 = "Plataforma educativa y de afiliación.";

$Truth_title_04 = "Recompensa";
$Truth_text_04 = "Ingresos residuales con 5 tipos de bonos.";

//-------------------------//
// Spirit
//-------------------------//

$Spirit_title = "Beneficios con propósito";

$Spirit_01 = "Terrenos con vista al mar.";
$Spirit_02 = "Plusvalía comprobable.";
$Spirit_03 = "Ingresos con un plan de compensación del 44%.";
$Spirit_04 = "Formación continua.";
$Spirit_05 = "Comunidad internacional que te impulsa.";

//-------------------------//
// Traits
//-------------------------//

$Traits_title = "Tu patrimonio comienza con una decisión. Invierte con propósito";

//-------------------------//
// Ingredients
//-------------------------//

$Ingredients_01 = "Formación {$Company_Name}";
$Ingredients_01_01 = "Aprendizaje";
$Ingredients_01_02 = "Conocimiento";
$Ingredients_01_03 = "Plataforma";
$Ingredients_01_04 = "Tecnología";
$Ingredients_01_05 = "Transformación";
$Ingredients_01_06 = "Resultados";

//-------------------------//
// Benefits
//-------------------------//

$Benefits = "Beneficios";

$Benefits_sub_01 = "Crecimiento con propósito";
$Benefits_01_tit_01 = "Formación práctica y actualizada";
$Benefits_01_01 = "Cursos digitales aplicables desde el primer día.";
$Benefits_01_tit_02 = "Aprendizaje con impacto";
$Benefits_01_02 = "Desarrolla habilidades reales y sostenibles.";
$Benefits_01_tit_03 = "Comunidad educativa global";
$Benefits_01_03 = "Conecta, comparte y crece junto a otros.";
$Benefits_01_tit_04 = "Oportunidad de expansión y recompensas";
$Benefits_01_04 = "Gana y progresa compartiendo conocimiento real.";

//-------------------------//
// Started - Product bonuses
//-------------------------//


$Satarted_title_01 = "Formación digital con propósito y resultados";
$Satarted_sub_01 = "Todo dentro de un ecosistema que combina educación, innovación y resultados reales.";

$Satarted_01_title = "Accesible y global";
$Satarted_01_text = "Disponible en cualquier país del mundo, sin horarios ni limitaciones, tu aprendizaje y crecimiento están siempre al alcance, dondequiera que estés.";

$Satarted_02_title = "Educación práctica y actualizada";
$Satarted_02_text = "Aprende sobre inteligencia artificial, criptomonedas, tecnología y monetización digital con contenidos reales, aplicables y en constante evolución.";

$Satarted_03_title = "Ecosistema inteligente y profesional";
$Satarted_03_text = "Gestiona tu progreso desde una oficina virtual moderna y automatizada.";

$Satarted_foot = "Da el siguiente paso: activa tu membresía CRYN, crea libertad a través del aprendizaje.";

$Satarted_subpage_01 = "Tu crecimiento comienza donde decides aprender con propósito";

//-------------------------//
// Footer
//-------------------------//

$Footer_title_01 = "Horario";
$Footer_title_02 = "Legal";
$Footer_title_03 = "Nosotros";

$Footer_link_01 = "IBO Terms";
$Footer_link_02 = "Políticas y Procedimientos";
$Footer_link_03 = "Política de Privacidad";

//-------------------------//
// Founders
//-------------------------//

$founderHero_title01 = "Conviértete en inversionista fundador";
$founderHero_title02 = "93 Terrenos Exclusivos, 93 Oportunidades Únicas";
$founderHero_text = "Adquiere hoy en la \"Zona Origen\" desde $10,000 USD lo que mañana valdrá mas $50,000 USD. Ahorro inmediato de $40,000 + 50% descuento en titulación";
$founderHero_btn = "Comprar lote fundador";
$founderHero_note = "Proceso 100% seguro • Titulación garantizada • Financiamiento disponible";

$founderOportunity_title = "Una Oportunidad Única en la Historia del Desarrollo Inmobiliario Latinoamericano";
$founderOportunity_text1 = "Estimado Inversionista Visionario,";
$founderOportunity_text2 = "Hay momentos en la trayectoria de un proyecto transformador que marcan la diferencia entre ser un participante y ser un fundador. Hoy, extendemos una invitación exclusiva para formar parte del núcleo fundacional de Tierra Nuestra, un desarrollo que redefinirá el concepto de comunidad sostenible en México.";
$founderOportunity_text3 = "En la historia de cada gran proyecto existen dos tipos de personas: los que observan su desarrollo y los que definen su destino desde el principio. Hoy tienes ante ti la decisión de pertenecer a este segundo grupo limitado y exclusivo de fundadores.";
$founderOportunity_text4 = "Solo 93 terrenos en la \"Zona Origen\", el área más privilegiada y estratégicamente diseñada de Tierra Nuestra, están disponibles bajo condiciones que jamás se volverán a ofrecer.";
$founderOportunity_text5 = "Esta no es una preventa; es la fundación oficial de nuestra comunidad que marcará el estándar de lujo sostenible en Latinoamérica.";

$founderValue_title1 = "El VALOR de ser fundador";
$founderValue_title2 = "No Solo Es Un Descuento, Es Una Ventaja Estratégica";
$founderValue_text = "Mientras el precio público inicial será más de $50,000 USD, como inversionista fundador accedes a condiciones excepcionales en el tiempo:";
$founderValue_item1_title = "Precio de Fundador";
$founderValue_item1_price = "$10,000 USD (pago único al contado)";
$founderValue_item1_text = "Una inversión inicial con un potencial de apreciación inmediata del 400% frente al valor público.";
$founderValue_item2_title = "Opción de Fundador a Crédito";
$founderValue_item2_price = "$18,000 USD";
$founderValue_item2_text = "Plan especial flexible para maximizar tu capital.";
$founderValue_item3_title = "Titulación Preferente";
$founderValue_item3_price = "Con hasta 50% de Ahorro";
$founderValue_item3_text = "Nuestro equipo legal gestionará toda tu escrituración con descuento exclusivo.";

$founderBenefits_title = "Beneficios Exclusivos de Inversionista Fundador";
$founderBenefits_text = "Ser fundador en Tierra Nuestra es una posición estratégica con ventajas tangibles:";
$founderBenefits_item1_title = "Posición geográfica privilegiada";
$founderBenefits_item1_list1 = "Lotes en la \"Zona Origen\" con las mejores vistas panorámicas al Mar de Cortés.";
$founderBenefits_item1_list2 = "Acceso prioritario a amenities exclusivas no disponibles en otras áreas.";
$founderBenefits_item1_list3 = "Ubicación dentro del masterplan con mayor plusvalía proyectada.";
$founderBenefits_item2_title = "Reconocimiento permanente";
$founderBenefits_item2_list1 = "Inclusión en el \"Muro de Fundadores\" en la Casa Club Central.";
$founderBenefits_item2_list2 = "Certificado digital de Fundador con tokenización blockchain para autenticidad inmutable.";
$founderBenefits_item2_list3 = "Mención permanente en materiales corporativos de {$Company_Fullname}.";
$founderBenefits_item3_title = "Ventajas económicas extendidas";
$founderBenefits_item3_list1 = "Extensión Premium a máximos beneficios del programa de compensación Xterrare Global.";
$founderBenefits_item3_list2 = "Acceso a bono exclusivo Xterrare Global Fundador.";
$founderBenefits_item3_list3 = "Exención de 50% en cuotas de mantenimiento durante los primeros 5 años.";
$founderBenefits_item3_list4 = "Derecho de preferencia en futuras fases del desarrollo.";
$founderBenefits_item3_list5 = "Acceso anticipado a ventas de lotes comerciales y residenciales VIP.";
$founderBenefits_item4_title = "Beneficios operativos";
$founderBenefits_item4_list1 = "Gestión de escrituración integral con ahorro del 50% en todos los trámites.";
$founderBenefits_item4_list2 = "Asesoría personalizada en diseño bioclimático para tu futura construcción.";
$founderBenefits_item4_list3 = "Acceso prioritario a proveedores certificados en construcción sostenible.";
$founderBenefits_item5_title = "Oportunidades de networking de alto nivel";
$founderBenefits_item5_list1 = "Invitación anual al \"Encuentro de Fundadores\" en Baja California Sur.";
$founderBenefits_item5_list2 = "Acceso a red privada de inversionistas fundadores a nivel global.";
$founderBenefits_item5_list3 = "Participación en decisiones comunitarias a través del \"Consejo Consultivo de Fundadores\".";

$founderLegacy_title = "El legado fundador";
$founderLegacy_subtitle1 = "¿Qué Estás Adquiriendo Exactamente?";
$founderLegacy_text1 = "Un terreno con una posición fundacional en la comunidad sostenible más exclusiva de Baja California Sur. Cada lote en la \"Zona Origen\" incluye:";
$founderLegacy_subtitle2 = "Características exclusivas";
$founderLegacy_list1_1 = "Ubicación privilegiada: Vistas de 270° al Mar de Cortés.";
$founderLegacy_list1_2 = "Título de propiedad real: Escrituración garantizada en 45 días.";
$founderLegacy_list1_3 = "Diseño bioclimático: Asesoría personalizada sin costo.";
$founderLegacy_list1_4 = "Acceso VIP: Entrada privada y amenities exclusivas.";
$founderLegacy_subtitle3 = "Beneficios transformadores";
$founderLegacy_list2_1 = "Seguridad patrimonial: Activo tangible que crece con el tiempo.";
$founderLegacy_list2_2 = "Legado sostenible: Inversión con impacto ambiental positivo.";
$founderLegacy_list2_3 = "Comunidad exclusiva: Networking con otros 92 visionarios.";
$founderLegacy_list2_4 = "Apreciación garantizada: De $10,000 a $50,000 USD al cierre de preventa.";

$founderSteps_title = "El reloj avanza: proceso de adquisición VIP";
$founderSteps_text = "La economía más fundamental enseña que el valor se crea con oferta limitada y demanda creciente:";
$founderSteps_list_1 = "93 terrenos en la zona más exclusiva del desarrollo.";
$founderSteps_list_2 = "Ubicación en el corredor de mayor crecimiento turístico de México.";
$founderSteps_list_3 = "Políticas de conservación que limitan futuros desarrollos similares.";
$founderSteps_list_4 = "Demanda comprobada en Baja California Sur supera la oferta actual en 5:1.";
$founderSteps_subtitle = "Pasos a seguir";
$founderSteps_step1_title = "Paso 1: Reserva inmediata";
$founderSteps_step1_text1 = "Desde $1,000 USD al mes.";
$founderSteps_step1_text2 = "Activa tu posición en la lista de selección prioritaria.";
$founderSteps_step2_title = "Paso 2: Selección de lote VIP";
$founderSteps_step2_text = "Acceso anticipado al mapa interactivo 3D con disponibilidad en tiempo real.";
$founderSteps_step3_title = "Paso 3: Elección de financiamiento";
$founderSteps_step3_list1 = "Opción Fundador Diamante: $10,000 USD al contado (pago único).";
$founderSteps_step3_list2 = "Opción Fundador Platino: $18,000 USD (desde $1.000 USD para reservar y $1.000 USD al mes durante 17 meses sin intereses).";
$founderSteps_step4_title = "Paso 4: Titulación express";
$founderSteps_step4_text = "Nuestro equipo legal gestiona todo en 45 días con tu ahorro del 50%.";
$founderSteps_step5_title = "Paso 5: Entrega de paquete fundador";
$founderSteps_step5_text = "Recibe físicamente tu certificado, placa, NFT y beneficios.";

$founderFuture_title1 = "Los fundadores no predicen el futuro;";
$founderFuture_title2 = "lo construyen desde cimientos privilegiados";
$founderFuture_text1 = "Esta es tu oportunidad de ser parte de la primera línea de un proyecto que marcará tendencia en desarrollo sostenible en Latinoamérica.";
$founderFuture_text2 = "No es solo una inversión; es un posicionamiento estratégico en el futuro del patrimonio consciente.";

$founderFaq_title = "Preguntas Frecuentes";

$founderFaq_question1 = "¿Por qué es tan económico ser parte de los fundadores?";
$founderFaq_answer1 = "Porque tu participación temprana valida el proyecto y nos permite optimizar costos de lanzamiento. Tu ganancia es nuestra validación.";
$founderFaq_question2 = "¿Qué garantía tengo de que el proyecto se complete?";
$founderFaq_answer2 = "Contamos con garantía bancaria, aval de constructoras internacionales y fases de desarrollo con hitos verificables.";
$founderFaq_question3 = "¿Puedo visitar el terreno antes de comprar?";
$founderFaq_answer3 = "Sí, organizamos tours VIP para fundadores cada 15 días con transporte privado desde Loreto.";
$founderFaq_question4 = "¿Qué pasa si necesito vender?";
$founderFaq_answer4 = "Ofrecemos programa de recompra preferencial a precio de mercado y bolsa de intercambio exclusiva para fundadores.";
$founderFaq_question5 = "¿Hay costos adicionales ocultos?";
$founderFaq_answer5 = "No. Precio todo incluido excepto el impuesto predial municipal.";
$founderFaq_question6 = "¿Puedo transferir mi reserva a otra persona?";
$founderFaq_answer6 = "Sí, dentro de los primeros 30 días sin costo.";
$founderFaq_question7 = "¿Hay límite de lotes por persona?";
$founderFaq_answer7 = "Máximo 3 lotes para dar oportunidad a más fundadores.";
$founderFaq_question8 = "¿Y si no puedo construir ahora?";
$founderFaq_answer8 = "El terreno aprecia valor estando vacío. Ofrecemos un programa de renta de terrenos mientras decides. Plusvalía promedio del 15% anual comprobada.";
$founderFaq_question9 = "¿Puedo vender después?";
$founderFaq_answer9 = "Sí, con nuestro programa de recompra preferencial o en nuestra bolsa de intercambio exclusiva para fundadores. Ya hay lista de espera de compradores.";
$founderFaq_question10 = "¿Es demasiado bueno para ser verdad?";
$founderFaq_answer10 = "Entendemos el escepticismo. Por eso ofrecemos: Tour virtual en vivo y due diligence completo disponible.";
$founderFaq_question11 = "Tengo más preguntas ¿Con quién puedo contactar y consultar?";
$founderFaq_answer11 = "Tenemos un equipo capacitado de atención al cliente para responder cualquier inquietud que puedas tener.";

$founderBanner = "Aprovecha esta oportunidad única";
$founderBannerCta = "Comprar ahora";

$founderPD1 = "P.D.: Imagínate dentro de 3 años explicando cómo obtuviste un terreno en la comunidad más exclusiva de Baja California por el 20% de su valor... o si estarás imaginando cómo dejaste pasar esa oportunidad. La decisión es tuya, pero la ventana es minúscula.";
$founderPD2 = "P.P.D.: Los verdaderos inversionistas entienden que las oportunidades únicas no se anuncian dos veces. Este es tu momento. Esta es tu ventana. Este es tu lote.";
$founderPD3 = "P.P. D.: Los 93 fundadores serán recordados como los visionarios que iniciaron el movimiento de comunidades sostenibles premium en Latinoamérica. ¿Estará tu nombre entre ellos?";
