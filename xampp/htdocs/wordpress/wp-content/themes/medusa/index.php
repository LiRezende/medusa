<?php get_header(); ?>
    <section>
        <div class="container">
            <div class="container-left"></div>
            <div class="container-right">
                <div class="container-card">
                    <h2>MedUsa</h2>
                    <h3>
                        Physician services to help you
                        manage your practice.
                    </h3>
                    <div class="btn-container-card">
                        <div>
                            <a href="#"><button class="btn-container">View Our Services</button></a>
                        </div>
                        <div>
                            <a href="#"><button class="btn-container">Software We Offer</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container-hero">
            <div class="container-hero-left">
                <h2>Cloud Based RCM Service<br/> and Software</h2>
                <h3>Excellent Service is Our Promise</h3>
                <p>
                    Providing excellent service to our patients and your practice is our<br/>
                    promise. Our dedicated team of billing specialists and billing managers 
                    are<br/>here to help. We have over 38 years of combined practice management<br/>
                    and industry knowledge. Let our experience work for you.
                </p>
                <a href="#"><button class="btn-container">See Our Case Studies</button></a>
            </div>
            <div class="container-hero-right">
                <img src="http://localhost/wordpress/wp-content/uploads/2021/03/MEDUSA_HOME_IMG0021X.jpg"/>
            </div>
        </div>
    </section>
    <section>
        <div class="container-bottom">
            <div>
                <img class="border-top-left" src="http://localhost/wordpress/wp-content/uploads/2021/03/qb_upper.png"/>
                <h2>
                    From Small Practices to Large Provider Health<br/>
                    Systems, Med USA Provides Scalable Solutions.
                </h2>
                <img class="border-bottom-right" src="http://localhost/wordpress/wp-content/uploads/2021/03/qb_lower.png"/>
                <h3>
                    Reach out to see how our team can help.
                </h3>
                <form>
                    <input type="text" id="nameid" placeholder="Nome" required="required" name="name"/>
                    <input type="text" id="lastnameid" placeholder="Sobrenome" required="required" name="last-name"/><br/>
                    <input type="email" id="emailid" placeholder="E-mail" name="email"/>
                    <input type="tel" id="phoneid" placeholder="Telefone" name="phone" /><br/>
                    <input type="submit" class="submit" onclick="Enviar();" value="Enviar" />
                </form>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
