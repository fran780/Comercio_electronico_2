<?php

namespace Controllers;

use Utilities\Site;
use Views\Renderer;

class BasicInfo extends PublicController
{
    public function run(): void
    {
        Site::addLink("public/css/basicinfo.css");

        $viewData = [
            "historia" => "ElectroHonduras nace en 2020 como una respuesta directa a la necesidad creciente de acceso a productos electrónicos de calidad en el territorio nacional. En un mercado donde la tecnología era costosa y poco accesible para muchas familias hondureñas, decidimos crear una alternativa confiable, moderna y centrada en el cliente. A través de nuestra plataforma digital, ofrecemos una amplia variedad de productos, desde computadoras y televisores hasta teléfonos móviles y dispositivos inteligentes para el hogar.

Hoy, después de varios años de operación, hemos consolidado nuestra presencia como una de las principales tiendas electrónicas en línea de Honduras, gracias a un enfoque en la confianza, la entrega rápida y el soporte permanente al cliente. Nuestro compromiso ha sido siempre facilitar el acceso a la tecnología para mejorar la calidad de vida de nuestros clientes, tanto en zonas urbanas como rurales.",

            "mision" => "Nuestra misión es democratizar el acceso a la tecnología en Honduras, ofreciendo productos electrónicos modernos, útiles y confiables a precios competitivos. Nos esforzamos por brindar una experiencia de compra en línea segura, rápida y acompañada de un servicio al cliente cercano y efectivo.",

            "vision" => "Aspiramos a ser la tienda electrónica líder en Honduras, reconocida no solo por la calidad de nuestros productos, sino también por nuestro compromiso con la innovación, la equidad digital y la satisfacción total de nuestros clientes. Queremos ser el puente que conecta a cada hondureño con la tecnología del futuro.",

            "valores" => "• Compromiso con el cliente: nos ponemos en los zapatos de cada persona que nos compra, resolviendo dudas y brindando soluciones reales.\n• Transparencia: precios claros, procesos sencillos y políticas justas.\n• Innovación: buscamos siempre ofrecer productos actuales, útiles y adaptados a las necesidades del país.\n• Accesibilidad: llegamos a donde otros no llegan, con opciones de entrega a nivel nacional.\n• Responsabilidad: actuamos con ética, tanto en lo comercial como en nuestro impacto social y ambiental."
        ];

        Renderer::render("basicinfo", $viewData);
    }
}
