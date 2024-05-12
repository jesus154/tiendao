<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Alpine and Tailwind Accordion</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css'>

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container text-grey mx-auto px-2 py-2" x-data="{
            faqs: [
                {
                    question: '¿Qué tipos de ropa deportiva ofrecen en su tienda?',
                    answer: 'Ofrecemos una amplia variedad de ropa deportiva, que incluye prendas para correr, hacer yoga, entrenamiento de fuerza, deportes al aire libre, natación, ciclismo y más.',
                    isOpen: true,
                },
                {
                    question: '¿Cuáles son las marcas más populares que venden en su tienda?',
                    answer: 'Trabajamos con una amplia gama de marcas populares de ropa deportiva, incluyendo Nike, Adidas, Puma, Under Armour, Reebok, Asics y muchas más.',
                    isOpen: false,
                },
                {
                    question: '¿Cuál es su política de devoluciones y cambios?',
                    answer: 'Ofrecemos una política de devoluciones y cambios sin problemas. Si no está satisfecho con su compra, puede devolver o cambiar la prenda en un plazo de 30 días a partir de la fecha de compra.',
                    isOpen: false,
                },
                {
                    question: '¿Ofrecen descuentos para clientes frecuentes o compras en grandes cantidades?',
                    answer: 'Sí, ofrecemos descuentos especiales para clientes frecuentes y compras en grandes cantidades. Consulte con nuestro equipo de ventas para obtener más información.',
                    isOpen: false,
                },
                {
                    question: '¿Tienen un programa de lealtad o recompensas para los clientes?',
                    answer: 'Sí, ofrecemos un programa de lealtad para nuestros clientes. Con cada compra, acumulará puntos que podrá canjear por descuentos y otras recompensas.',
                    isOpen: false,
                },
                {
                    question: '¿Cómo puedo encontrar el tamaño adecuado de ropa deportiva?',
                    answer: 'Le recomendamos que consulte nuestra tabla de tallas y, si tiene dudas, puede probarse la prenda antes de comprarla. Nuestro personal de ventas también puede ayudarlo a encontrar la talla adecuada.',
                    isOpen: false,
                },
                {
                    question: '¿Ofrecen opciones de personalización para la ropa deportiva?',
                    answer: 'Sí, ofrecemos opciones de personalización para la mayoría de nuestras prendas deportivas. Puede agregar su nombre, número o logotipo en las prendas.',
                    isOpen: false,
                },
                {
                    question: '¿Tienen ropa deportiva específica para diferentes tipos de deportes?',
                    answer: 'Sí, ofrecemos ropa deportiva específica para diferentes tipos de deportes. Desde ropa para correr hasta trajes de baño para natación, tenemos una amplia variedad de opciones.',
                    isOpen: false,
                },
                {
                    question: '¿Qué materiales utilizan en la ropa deportiva que venden?',
                    answer: 'Utilizamos materiales de alta calidad que son duraderos y transpirables. Esto incluye materiales como poliéster, spandex, algodón y otros materiales técnicos.',
                    isOpen: false,
                },
                {
                    question: '¿Cómo puedo cuidar adecuadamente mi ropa deportiva para que dure más tiempo?',
                    answer: 'Le recomendamos que siga las instrucciones de cuidado en la etiqueta de cada prenda. Además, recomendamos lavar la ropa deportiva por separado y colgarla para secar en lugar de ponerla en la secadora para evitar dañar los materiales.',
                    isOpen: false,
                },
            ]
        }">
  <h2 class="text-2xl font-bold">FAQs</h2>
  <div class="leading-loose text-lg mt-6">
    <template x-for="(faq, index) in faqs" :key="faq.question">
      <div>
        <button class="w-full font-bold py-3 flex justify-between items-center mt-4" :class="index !== faqs.length - 1 && 'border-b border-gray-400'" @click="faqs = faqs.map(f => ({ ...f, isOpen: f.question !== faq.question ? false : !f.isOpen}))">
          <!-- Specs has it that only one component can be open at a time and also you should be able to toggle the open state of the active component too -->
          <div x-text="faq.question"></div>
          <svg x-show="!faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24">
            <path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm1-9h2a1 1 0 010 2h-2v2a1 1 0 01-2 0v-2H9a1 1 0 010-2h2V9a1 1 0 012 0v2z" />
          </svg>
          <svg x-show="faq.isOpen" class="fill-current" viewBox="0 0 24 24" width="24" height="24">
            <path class="heroicon-ui" d="M12 22a10 10 0 110-20 10 10 0 010 20zm0-2a8 8 0 100-16 8 8 0 000 16zm4-8a1 1 0 01-1 1H9a1 1 0 010-2h6a1 1 0 011 1z" />
          </svg>
        </button>

        <div class="text-gray-700 text-sm mt-2" x-text="faq.answer" x-show="faq.isOpen"></div>
      </div>
    </template>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.10.2/cdn.js'></script>
</body>
</html>
