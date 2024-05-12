var $messages = $('.messages-content'),
    d, h, m,
    i = 0;

$(window).load(function() {
  $messages.mCustomScrollbar();
  setTimeout(function() {
    fakeMessage();
  }, 100);
});

function updateScrollbar() {
  $messages.mCustomScrollbar("update").mCustomScrollbar('scrollTo', 'bottom', {
    scrollInertia: 10,
    timeout: 0
  });
}

function setDate(){
  d = new Date()
  if (m != d.getMinutes()) {
    m = d.getMinutes();
    $('<div class="timestamp">' + d.getHours() + ':' + m + '</div>').appendTo($('.message:last'));
  }
}

function insertMessage() {
  msg = $('.message-input').val();
  if ($.trim(msg) == '') {
    return false;
  }
  $('<div class="message message-personal">' + msg + '</div>').appendTo($('.mCSB_container')).addClass('new');
  setDate();
  $('.message-input').val(null);
  updateScrollbar();
  setTimeout(function() {
    fakeMessage();
  }, 1000 + (Math.random() * 20) * 100);
}

$('.message-submit').click(function() {
  insertMessage();
});

$(window).on('keydown', function(e) {
  if (e.which == 13) {
    insertMessage();
    return false;
  }
})

var Fake = [
  'Hola, soy el gerente de nuestra tienda de ropa deportiva. ¿Está buscando algo en particular o puedo ofrecerle alguna ayuda?',
  'Me alegra saber que estás interesado en nuestros productos. ¿Puedes proporcionarme más detalles sobre qué tipo de ropa deportiva estás buscando?',
  '¿Qué tipo de actividades deportivas practicas? Estamos seguros de que podemos ofrecerte la ropa adecuada para tu deporte favorito.',
  'Por supuesto, déjame buscar la información que necesitas sobre ese producto en particular.',
  '¿Está buscando ropa para entrenamiento o para competencia? Nuestra tienda tiene una gran variedad de opciones para ambos casos.',
  'Nos enorgullece ofrecer una amplia gama de productos de alta calidad para nuestros clientes. Estamos seguros de que encontrarás lo que estás buscando.',
  'Estamos de acuerdo, nuestra tienda tiene todo lo que necesitas para mantenerte cómodo y en forma mientras practicas tu deporte favorito',
  'Gracias por tus amables palabras, estamos comprometidos en ofrecer el mejor servicio y productos de calidad a nuestros clientes.',
  'Creemos que todos nuestros clientes son geniales y merecen la mejor ropa deportiva disponible.',
  'Por supuesto, déjame explicarte con más detalles cómo nuestros productos pueden mejorar tu experiencia deportiva.',
  'Estaremos encantados de atenderte en lo que necesites. ¡No dudes en preguntarnos lo que necesites!',
  '¡Nos alegra haber podido ayudarte hoy! ¡Gracias por visitarnos!',
  '¡Esperamos verte de nuevo pronto en nuestra tienda de ropa deportiva!',
  '¡Hasta la próxima! ¡Que tengas un excelente día!',
  ':)'
]

function fakeMessage() {
  if ($('.message-input').val() != '') {
    return false;
  }
  $('<div class="message loading new"><figure class="avatar"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/156381/profile/profile-80.jpg" /></figure><span></span></div>').appendTo($('.mCSB_container'));
  updateScrollbar();

  setTimeout(function() {
    $('.message.loading').remove();
    $('<div class="message new"><figure class="avatar"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/156381/profile/profile-80.jpg" /></figure>' + Fake[i] + '</div>').appendTo($('.mCSB_container')).addClass('new');
    setDate();
    updateScrollbar();
    i++;
  }, 1000 + (Math.random() * 20) * 100);

}