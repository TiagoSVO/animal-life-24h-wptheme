<section id="al-services" style={{backgroundImage: 'url(https://picsum.photos/id/837/2000)'}}>
    <div className="al-green-screen"></div>
    <div className="al-services-title text-center">
            <h2>Serviços</h2>
        </div>
        <div className="al-services-content">
            <div className="container">
                <div className="row justify-content-between text-center ">
                    {this.state.services.map((service) => {
                        return (
                            <div className="col-12 col-md-6 col-lg-4  al-service-card-wrap">
                                <a href="">
                                    <div className="d-flex">
                                        <div className="al-service-card">
                                            <div className="al-hexagon-wrap">
                                                <div className="al-hexagon-img" style={{backgroundImage: 'url('+ service.image +')'}} ></div>
                                            </div>
                                            <div className="al-services-content">
                                                <h3>{service.title}</h3>
                                                <p>{service.description}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        )
                    })}
                </div>
            </div>
        </div>
</section>
