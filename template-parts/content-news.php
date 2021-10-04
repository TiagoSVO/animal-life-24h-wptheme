<section id="al-posts">
    <div className="al-posts-title text-center">
        <h2>Últimos Posts</h2>
    </div>
    <div className="al-posts-divider">
        <span></span>
        <span></span>
    </div>
    <div className="container">
        <div className="row row-cols-1 row-cols-md-3 g-4">
            {this.state.dataPosts.map((post) => {
                return(
                    <div className="col">
                        <div className="card h-100 al-posts-card">
                            <div className="al-posts-card-image-wrap">
                                <div className="al-posts-card-data-wrap">
                                    <div className="al-posts-card-data-day">
                                        {post.date.day}
                                    </div>
                                    <div className="al-posts-card-data-mounth">
                                        {post.date.mounth}
                                    </div>
                                </div>
                                <div style={{backgroundImage: `url(${post.image})`}} className="card-img-top" alt="..." />
                            </div>
                            <div className="card-body">
                                <h5 className="card-title">{post.title}</h5>
                                <div className="al-posts-divider-card">
                                    <span></span>
                                </div>
                                <p className="card-text">{ReactHtmlParser(post.description)}</p>
                                <br/>
                                {post.url != null &&
                                    <p className="card-text-bottom">
                                        <a target="_blank" href={post.url}>Leia mais...</a>
                                    </p>
                                }
                            </div>
                            <div className="card-footer bg-transparent al-posts-card-footer">
                                <small className="al-posts-card-footer-categories"><strong>Categorias:</strong> {
                                    post.categories.map((category, i) => {
                                        return(
                                            <React.Fragment>
                                                <a href="#">{category}</a>{(i == (post.categories.length-1) ? '' : ', ')}
                                            </React.Fragment>
                                        )
                                    })
                                } </small> <br/>
                                <small className="al-posts-card-footer-tags"><strong>Tags:</strong> {
                                    post.tags.map((tag, i) => {
                                        return(
                                            <React.Fragment>
                                                <a href="#">{tag}</a> {(i == (post.tags.length-1) ? '' : ' | ')}
                                            </React.Fragment>
                                        )
                                    })
                                }</small>
                            </div>
                        </div>
                    </div>
                )
            })}
        </div>
    </div>
    <div className="al-posts-divider">
        <span></span>
        <span></span>
    </div>
    <div className="d-flex align-items-center al-posts-footer justify-content-center">
        <a target="_blank" href="https://www.instagram.com/animallife24h/" className="al-posts-button" >Todos os posts</a>
    </div>
</section>
