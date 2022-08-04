'use strict';

const selectBox = document.getElementById('lista');
selectBox.addEventListener('click', () => {
  const pf = document.getElementById('form-fisica');
  const pj = document.getElementById('form-juridica');
  const fisicaBotao = document.getElementById('fisica-botao');
  const juridicaBotao = document.getElementById('juridica-botao');

  const tipoPessoa = selectBox.options[selectBox.selectedIndex].value;
  console.log(tipoPessoa);

  switch (tipoPessoa) {
    case 'pf':
      pf.classList.remove('hidden');
      pj.classList.add('hidden');
      juridicaBotao.classList.add('hidden');
      fisicaBotao.classList.remove('hidden');
      break;
    case 'pj':
      pj.classList.remove('hidden');
      pf.classList.add('hidden');
      fisicaBotao.classList.add('hidden');
      juridicaBotao.classList.remove('hidden');
      break;
    default:
      Swal.fire('alguma coisa deu errado');
      break;
  }
});

const testebutao = document.getElementById('testebutao');
testebutao.addEventListener('click', () => {
  Swal.fire('Any fool can use a computer');
});

// CLIENTE
function msgSuccess() {
  console.log('Ajax bem-sucedido');
}
function cadastrarClienteFisico() {
  // const nomeSobrenome = [$('#nome').val(), $('#sobrenome').val()];
  // const nomeCompleto = nomeSobrenome.join('-');
  // console.log(nomeCompleto);
  // const nascimento = $('#nascimento').val();
  const usuario = $('#usuario').val();
  const senha = $('#senha').val();
  const email = $('#e-mail').val();
  const genero = $('#genero').val();
  const cpf = $('#cpf').val();
  const rg = $('#rg').val();

  if (usuario === '' || senha === '' || email === '' || genero === '' || cpf === '' || rg === '') {
    Swal.fire('Onde estão os dados?', 'Você não pode cadastrar com campos vazios', 'question');
  } else {
    $.ajax({
      url: 'api/controller/acadastrocliente.php',
      type: 'POST',
      data: {
        usuario: usuario,
        senha: senha,
        email: email,
        // sobrenome: sobrenome,
        // nascimento: nascimento,
        genero: genero,
        cpf: cpf,
        rg: rg,
      },
      success: function (response) {
        msgSuccess();
        if (response === 'Já foi cadastrado' || response == 'Usuário já existe, escolha outro') {
          Swal.fire(response, '', 'error');
        } else {
          Swal.fire('Pronto!', response, 'success');
        }
      },
    });
    // console.log(data);
  }
}
function cadastrarClienteJuridico() {
  let razaoSocial = $('#razao-social').val();
  let nomeFantasia = $('#nome-fantasia').val();
  let cnpj = $('#cnpj').val();
  let ie = $('#ie').val();
  let im = $('#im').val();
  let isento = $('#isento').val();

  if (razaoSocial === '' || nomeFantasia === '' || cnpj === '' || ie === '' || im === '' || isento === '') {
    Swal.fire('Onde estão os dados?', 'Você não pode cadastrar com campos vazios', 'question');
  } else {
    $.ajax({
      url: 'api/controller/acadastrocliente.php',
      type: 'POST',
      data: {
        razaoSocial: razaoSocial,
        nomeFantasia: nomeFantasia,
        cnpj: cnpj,
        ie: ie,
        im: im,
        isento: isento,
      },
      success: function (response) {
        msgSuccess();
        if (response === 'Já foi cadastrado') {
          Swal.fire(response, '', 'error');
        } else {
          Swal.fire('Pronto!', response, 'success');
        }
      },
    });
    console.log(data);
  }
}
function incluirContato() {
  let tipoContato = $('#tipoContato-fornecedor').val();
  let contato = $('#contato').val();

  $.ajax({
    url: 'api/controller/bcadastrocontato.php',
    type: 'POST',
    data: {
      tipoContato: tipoContato,
      contato: contato,
    },
    success: function (response) {
      msgSuccess();
    },
  });
}
function incluirEndereco() {
  let cep = $('#cep').val();
  let enderecoPreferencial = $('#endereco-preferencial').val();
  let logradouro = $('#logradouro').val();
  let numero = $('#numero').val();
  let complemento = $('#complemento').val();
  let bairro = $('#bairro').val();
  let cidade = $('#cidade').val();
  let uf = $('#uf').val();

  $.ajax({
    url: 'api/controller/bcadastroendereco.php',
    type: 'POST',
    data: {
      cep: cep,
      enderecoPreferencial: enderecoPreferencial,
      logradouro: logradouro,
      numero: numero,
      complemento: complemento,
      bairro: bairro,
      cidade: cidade,
      uf: uf,
    },
    success: function (response) {
      msgSuccess();
    },
  });
}

// FORNECEDOR
function cadastrarFornecedor() {
  let nomeFornecedor = $('#nome-fornecedor').val();
  let sobrenomeFornecedor = $('#sobrenome-fornecedor').val();
  let generoFornecedor = $('#genero-fornecedor').val();
  let fundacaoFornecedor = $('#fundacao-fornecedor').val();
  let razaoFornecedor = $('#razao-fornecedor').val();
  let fantasiaFornecedor = $('#fantasia-fornecedor').val();
  let cnpjFornecedor = $('#cnpj-fornecedor').val();
  let ieFornecedor = $('#ie-fornecedor').val();
  let imFornecedor = $('#im-fornecedor').val();
  let isentoIm = $('#isento-im').val();

  $.ajax({
    url: 'api/controller/acadastrofornecedor.php',
    type: 'POST',
    data: {
      nomeFornecedor: nomeFornecedor,
      sobrenomeFornecedor: sobrenomeFornecedor,
      generoFornecedor: generoFornecedor,
      fundacaoFornecedor: fundacaoFornecedor,
      razaoFornecedor: razaoFornecedor,
      fantasiaFornecedor: fantasiaFornecedor,
      cnpjFornecedor: cnpjFornecedor,
      ieFornecedor: ieFornecedor,
      imFornecedor: imFornecedor,
      isentoIm: isentoIm,
    },
    success: function (response) {
      msgSuccess();
    },
  });
}
function incluirContato() {
  let tipoContato = $('#tipoContato-fornecedor').val();
  let contato = $('#contato').val();

  $.ajax({
    url: 'api/controller/bcadastrocontato.php',
    type: 'POST',
    data: {
      tipoContato: tipoContato,
      contato: contato,
    },
    success: function (response) {
      msgSuccess();
    },
  });
}
function incluirEndereco() {
  let cep = $('#cep').val();
  let enderecoPreferencial = $('#endereco-preferencial').val();
  let logradouro = $('#logradouro').val();
  let numero = $('#numero').val();
  let complemento = $('#complemento').val();
  let bairro = $('#bairro').val();
  let cidade = $('#cidade').val();
  let uf = $('#uf').val();

  $.ajax({
    url: 'api/controller/bcadastroendereco.php',
    type: 'POST',
    data: {
      cep: cep,
      enderecoPreferencial: enderecoPreferencial,
      logradouro: logradouro,
      numero: numero,
      complemento: complemento,
      bairro: bairro,
      cidade: cidade,
      uf: uf,
    },
    success: function (response) {
      msgSuccess();
    },
  });
}

// USUÁRIO
function cadastrarUsuario() {
  let nome = $('#nome').val();
  let sobrenome = $('#sobrenome').val();
  let genero = $('#genero').val();
  let dataNasc = $('#data-nasc').val();
  let login = $('#login').val();

  $.ajax({
    url: 'api/controller/acadastrousuario.php',
    type: 'POST',
    data: {
      nome: nome,
      sobrenome: sobrenome,
      genero: genero,
      dataNasc: dataNasc,
      login: login,
    },
    success: function (response) {
      msgSuccess();
    },
  });
}
function incluirContato() {
  let tipoContato = $('#tipo-contato').val();
  let contato = $('#contato').val();

  $.ajax({
    url: 'api/controller/bcadastrocontato.php',
    type: 'POST',
    data: {
      tipoContato: tipoContato,
      contato: contato,
    },
    success: function (response) {
      msgSuccess();
    },
  });
}
function incluirPermissoes() {
  let tipoPermissao = $('#permissao').val();
  let modulo = $('#modulo').val();

  $.ajax({
    url: 'api/controller/cadastropermissao.php',
    type: 'POST',
    data: {
      tipoPermissao: tipoPermissao,
      modulo: modulo,
    },
    success: function (response) {
      msgSuccess();
    },
  });
}
