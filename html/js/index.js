const cep = document.getElementById('cep');

async function buscarendereco(zipCode) {
    //Monstamos o endereço da URL.
    const url = `https://viacep.com.br/ws/${zipCode}/json/`;
    //Exibimos o string da URL.
    try {
        const response = await fetch(url, {
            method: "GET"
        });
        if (response.ok != true) {
            throw new Error(`Restrição: ${response.status}´`);
        }
        return await response.json();
    } catch (error) {
        throw new Error('Restrição: ' + error.message);
    }
}

//Rescebe os dados do endereço e preenche os campos de endereço
async function BuscarEndereco() {
    const zipCode = cep.value.replace('-', '');
    //Verificamos se o valor do cep esta vazio o é indefinido.
    if (zipCode === '' || zipCode === undefined || zipCode.length > 8) {
        return;
    }
    const response = await buscarendereco(zipCode);
    document.getElementById('logradouro').value = response.logradouro;
    document.getElementById('número da residencia').value = response.númerodaresidencia;
    document.getElementById('cidade').value = response.localidade;
    document.getElementById('cpf').value = response.cpf;
    document.getElementById('IBGE').value = response.IBGE
}
cep.addEventListener('blur', async () => {
    await BuscarEndereco();
});