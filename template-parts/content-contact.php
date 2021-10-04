<section id="al-contact">
    <div className="al-contact-circles">
        <span className="al-contact-circle"></span>
        <span className="al-contact-circle"></span>
    </div>
    <div className="al-contact-pegadas">
        <span className="al-contact-pegada" style={{backgroundImage: 'url("'+pegada+'")'}}></span>
        <span className="al-contact-pegada" style={{backgroundImage: 'url("'+pegada+'")'}}></span>
        <span className="al-contact-pegada" style={{backgroundImage: 'url("'+pegada+'")'}}></span>
        <span className="al-contact-pegada" style={{backgroundImage: 'url("'+pegada+'")'}}></span>
    </div>
    <h2>Fale Conosco</h2>
    <div className="container">
        <div className="row row-cols-1 row-cols-md-2">
            <div className="col al-contact-line-divider-right">
                <div className="al-contact-content-wrap">
                    <form className="row g-3">
                        <div className="col-12">
                            <label for="alInputNome" className="form-label">Nome</label>
                            <input type="text" className="form-control" id="alInputNome" />
                        </div>
                        <div className="col-12">
                            <label for="alInputEmail" className="form-label">E-mail</label>
                            <input type="email" className="form-control" id="alInputEmail" />
                        </div>
                        <div className="col-12">
                            <label for="alInputTelefone" className="form-label">Telefone</label>
                            <input type="text" className="form-control" id="alInputTelefone" />
                        </div>
                        <div className="col-12">
                            <label for="alInputAssunto" className="form-label">Assunto</label>
                            <input type="text" className="form-control" id="alInputAssunto" />
                        </div>
                        <div className="col-12">
                            <label for="alInputAssunto" className="form-label">Assunto</label>
                            <textarea rows="10" className="form-control" id="alInputAssunto" />
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn btn-light float-end" onClick={() => {this.alertMaintenance()}}>Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
            <div className="col">
                <div>
                    <div className="al-contact-content-wrap d-grid">
                        <div className="row al-contact-content-info">
                            <div className="col">
                                <p><strong>HORÁRIO DE ATENDIMENTO</strong></p>
                                <p>Segunda a Domingo 24h</p>
                            </div>
                        </div>
                        <div className="row al-contact-content-info">
                            <div className="col">
                                <p><strong>ENDEREÇO</strong></p>
                                <p>
                                    <a target="_blank" href="https://www.google.com/maps/dir//Animal+Life+24+hs+-+Centro+Avan%C3%A7ado+de+Especialidades+Veterin%C3%A1rio+QNJ+26+Lote+12+Lojas+01%2F02+Taguatinga+Norte+Bras%C3%ADlia+-+DF,+72140-260/@-15.8173406,-48.08262,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x935a3b856716ec49:0x70dca8f7c7ec0d2b!2m2!1d-48.08262!2d-15.8173406">Quadra QNJ 26 12, LOJA 01/02 Taguatinga Norte - Taguatinga/DF</a>
                                </p>
                            </div>
                        </div>
                        <div className="row al-contact-content-info">
                            <div className="col">
                                <p><strong>TELEFONES</strong></p>
                                <p><a target='_blank' href="tel: (61) 3542-4076">(61) 3542-4076</a> | <a target='_blank' href="https://wa.me/5561996853227">(61) 99685-3227</a></p>
                            </div>
                        </div>
                        <div className="row al-contact-content-info">
                            <div className="col">
                                <p><strong>E-MAIL</strong></p>
                                <p>animallifecontato@gmail.com</p>
                            </div>
                        </div>
                        <div className="row al-contact-content-info">
                            <div className="col">
                                <p><strong>REDES SOCIAIS</strong></p>
                                <div className="al-contact-redes-sociais">
                                    <a target='_blank' href="https://wa.me/5561996853227"><i class="bi bi-whatsapp" role="img" aria-label="Telefone - (61) 3542-4076"></i></a>
                                    <a href="https://www.instagram.com/animallife24h/"><i className="bi bi-instagram" role="img" aria-label="Telefone - (61) 3542-4076"></i></a>
                                    <a href="https://www.youtube.com/channel/UCgDi63POKCY6MzlytsfbfHw"><i className="bi bi-youtube" role="img" aria-label="Telefone - (61) 3542-4076"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
