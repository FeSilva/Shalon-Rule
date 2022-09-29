<div class="box box-info padding-1">
    <div class="box-body">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Dados Gerais</h4>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="cabecalho_nCodCli">Cliente</label>
                                <select type="text"
                                        class="js-example-basic-single form-control select2"
                                       id="cabecalho_nCodCli"
                                       name="cabecalho_nCodCli"
                                       placeholder="Cliente"
                                       >
                                    <option>Selecione</option>
                                   
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cabecalho_dDtPrevisao">Previsão de Faturamento</label>
                                <input type="date"
                                       class="form-control"
                                       id="cabecalho_dDtPrevisao"
                                       name="cabecalho_dDtPrevisao"
                                       placeholder="Previsão de Faturamento"
                                       value="<?= date('Y-m-d') ?>">
                            </div>
                        </div>


                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cabecalho_cCodIntOS">Total dos Serviços</label>
                                <input type="text"
                                       class="form-control"
                                       id="cabecalho_cCodIntOS"
                                       name="cabecalho_cCodIntOS"
                                       placeholder="Código OS"
                                       disabled
                                     />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cabecalho_cCodIntOS">Valor do Documento</label>
                                <input type="text"
                                       class="form-control"
                                       id="cabecalho_cCodIntOS"
                                       name="cabecalho_cCodIntOS"
                                       placeholder="Código OS"
                                       disabled
                                    />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cabecalho_cCodIntOS">Total de Dedução (ISS)</label>
                                <input type="text"
                                       class="form-control"
                                       id="cabecalho_cCodIntOS"
                                       name="cabecalho_cCodIntOS"
                                       placeholder="Código OS"
                                       disabled
                                    />
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="cabecalho_cCodIntOS">Valor Total da OS</label>
                                <input type="text"
                                       class="form-control"
                                       id="cabecalho_cCodIntOS"
                                       name="cabecalho_cCodIntOS"
                                       placeholder="Código OS"
                                       disabled
                                       />
                               
                            </div>
                        </div>


                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="cabecalho_vendedor">Vendedor</label>
                                <select type="text"
                                       class="form-control"
                                       id="cabecalho_vendedor"
                                       name="cabecalho_vendedor"
                                       placeholder="Vendedor"
                                       >
                                    <option>Selecione</option>
                                    <option></option>    

                                </select>
                               
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="cabecalho_nQtdeParc">Número de Parcelas</label>
                                <select type="text"
                                       class="form-control"
                                       id="cabecalho_nQtdeParc"
                                       name="cabecalho_nQtdeParc"
                                       placeholder="Número de Parcelas"
                                       >
                                    <option value="1">À Vista</option>
                                    <option></option>    
                                </select>
                            </div>
                        </div>
                            
                        <div class="col-md-12">
                            <ul class="nav nav-pills">
                                <li class="nav-item">
                                  <a class="nav-link active" id="service-tab" data-bs-toggle="pill" href="#service" aria-expanded="true">Serviços</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" id="infoAdic-tab" data-bs-toggle="pill" href="#infAdic" aria-expanded="false">Informações Adicionais</a>
                                </li>
                             
                                <li class="nav-item">
                                  <a class="nav-link" id="parcelas-tab" data-bs-toggle="pill" href="#parcelas" aria-expanded="false">Parcelas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="emailCliente-tab" data-bs-toggle="pill" href="#emailCliente" aria-expanded="false">E-mail Cliente</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="observacoes-tab" data-bs-toggle="pill" href="#observacoes" aria-expanded="false">Observações</a>
                                </li>
                              </ul>
                              <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="service" aria-labelledby="service-tab" aria-expanded="true">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <h4>Aqui estão os detalhes do serviço prestado</h4>
                                                </div>
                                                <div class="col-md-3">
                                                    <a href="#">+ Incluir novo Serviço</a>
                                                </div>
                                                <div class="col-md-3">
                                                    <span class="badge bg-secondary"  style="color:black; font-size:12px; cursor:pointer;" data-toggle="modal" data-target="#licenseActiveModal">
                                                        Selecionar Serviço Cadastrado 
                                                    </span>
                                                </div>
                            
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-3">
                                                            <label for="impostos_nAliqCOFINS">Tributação do Serviços</label>
                                                            <input type="number"
                                                                    class="form-control"
                                                                    id="impostos_nAliqCOFINS"
                                                                    name="impostos_nAliqCOFINS"
                                                                    placeholder="Aliquota COFINS"
                                                                    value="Tributado no Município">
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="impostos_cRetCOFINS">Cód. Serviço ou CNAE</label>
                                                                <input type="number"
                                                                    class="form-control"
                                                                    id="impostos_nAliqCOFINS"
                                                                    name="impostos_nAliqCOFINS"
                                                                    placeholder="Aliquota COFINS"
                                                                    value="Tributado no Município">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-3">
                                                            <div class="form-group">
                                                                <label for="impostos_cRetCOFINS">Aliquota ISS(%)</label>
                                                                <input type="number"
                                                                    class="form-control"
                                                                    id="impostos_nAliqCOFINS"
                                                                    name="impostos_nAliqCOFINS"
                                                                    placeholder="Aliquota COFINS"
                                                                    value="Tributado no Município">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="row">
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="impostos_nAliqINSS">Quantidade</label>
                                                                <input type="number"
                                                                        class="form-control"
                                                                        id="impostos_nAliqINSS"
                                                                        name="impostos_nAliqINSS"
                                                                        placeholder="Aliquota INSS"
                                                                        value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="impostos_cRetINSS">Valor Unit.</label>
                                                                <input type="text"
                                                                        class="form-control"
                                                                        id="impostos_cRetINSS"
                                                                        name="impostos_cRetINSS"
                                                                        placeholder="INSS"
                                                                        value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="impostos_cRetINSS">% De Desconto</label>
                                                                <input type="text"
                                                                        class="form-control"
                                                                        id="impostos_cRetINSS"
                                                                        name="impostos_cRetINSS"
                                                                        placeholder="INSS"
                                                                        value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="form-group">
                                                                <label for="impostos_cRetINSS">Valor Total</label>
                                                                <input type="text"
                                                                        class="form-control"
                                                                        id="impostos_cRetINSS"
                                                                        name="impostos_cRetINSS"
                                                                        placeholder="INSS"
                                                                        value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="impostos_cRetINSS">Valor do ISS</label>
                                                                <input type="text"
                                                                        class="form-control"
                                                                        id="impostos_cRetINSS"
                                                                        name="impostos_cRetINSS"
                                                                        placeholder="INSS"
                                                                        value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for="impostos_cRetINSS">Observações</label>
                                                                <textarea  class="form-control" name="observacoes">
                                                                
                                                                </textarea>
                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="infAdic" role="tabpanel" aria-labelledby="infAdic-tab" aria-expanded="false">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="infAdic_cCategoria">Categoria</label>
                                                    <select class="form-control" name="select">
                                                        <option value="valor1">Valor 1</option>
                                                        <option value="valor2" selected>Valor 2</option>
                                                        <option value="valor3">Valor 3</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="infAdic_cPedidoCliente">Nº do Pedido do Cliente</label>
                                                    <input type="text" class="form-control" id="n_pedido_cliente" name="n_pedido_cliente" placeholder="" value="">
                                                </div>
                                                <div class="col-md-3">
                                                    <label for="infAdic_cContratoVenda">Nº do Contrato de Venda</label>
                                                    <input type="text" class="form-control" id="n_contrato_venda" name="n_contrato_venda" placeholder="" value="">
                                                </div>
                                                <div class="col-md-12">
                                                    <label for="infAdic_cContratoVenda">Observações</label>
                                                    <textarea  class="form-control" name="observacoes"></textarea>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="infAdic_cContaCorrente">Conta Corrente</label>
                                                    <select class="form-control" name="select">
                                                        <option value="valor1">Valor 1</option>
                                                        <option value="valor2" selected>Valor 2</option>
                                                        <option value="valor3">Valor 3</option>
                                                    </select>
                                              
                                                    <div class="col-md-3">
                                                        <label for="infAdic_cPedidoCliente">Data do RPS</label>
                                                        <input type="text" class="form-control" id="n_pedido_cliente" name="n_pedido_cliente" placeholder="" value="">
                                                    </div>
                            
                                                    <div class="col-md-3">
                                                        <label for="infAdic_cContratoVenda">Cidade Prestação do Serviço</label>
                                                        <input type="text" class="form-control" id="n_contrato_venda" name="n_contrato_venda" placeholder="" value="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="infAdic_cPedidoCliente">Código ART</label>
                                                    <input type="text" class="form-control" id="n_pedido_cliente" name="n_pedido_cliente" placeholder="" value="">
                                                </div>
                        
                                                <div class="col-md-3">
                                                    <label for="infAdic_cContratoVenda">Contato</label>
                                                    <input type="text" class="form-control" id="n_contrato_venda" name="n_contrato_venda" placeholder="" value="">
                                                </div>
                                            </div>
                        
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label for="infAdic_cPedidoCliente">Número do Encapsulamento</label>
                                                    <input type="text" class="form-control" id="n_pedido_cliente" name="n_pedido_cliente" placeholder="" value="">
                                                </div>
                        
                                                <div class="col-md-3">
                                                    <a href="#">- Alterar Outros Detalhes</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            
                                <div class="tab-pane" id="parcelas" role="tabpanel" aria-labelledby="parcelas-tab" aria-expanded="false">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <h4>Contas a Receber <span>(clique duas vezes para modificar a parcela)</span></h4>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <table class="table" id="table">
                                                        <thead>
                                                            <tr>
                                                                <th>Situação</th>
                                                                <th>Parcela</th>
                                                                <th>Vencimento</th>
                                                                <th>Valor a Receber</th>
                                                                <th>Percentual</th>
                                                                <th>Tipo de Documento</th>
                                                                <th>Gerar Boleto</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td></td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <td></td>
                                                            </tr>
                                                        </tfoot>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                                <div class="tab-pane" id="emailCliente" role="tabpanel" aria-labelledby="emailCliente-tab" aria-expanded="false">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="checkbox" id="envRecibo" name="envRecibo" value="inviteEmil"> <label for="horns">Enviar um recibo de prestação de serviço (ao invés da NFS-e)</label> <br />
                                                    <input type="checkbox" id="envRecibo" name="envRecibo" value="inviteEmil"> <label for="horns">Enviar o link da NFS-e gerada na prefeitura</label>
                                                </div>
                                            </div>
                                        
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="observacoes" role="tabpanel" aria-labelledby="observacoes-tab" aria-expanded="false">
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>       
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Cadastrar OS</button>
    </div>
</div>