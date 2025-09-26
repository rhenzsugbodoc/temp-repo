




export default function Landing() {
    return (
            <section className="container-fluid p-0">
                <div
                    className="bg-landing-gradient-header d-flex flex-column bottom-shadow"
                    style={{ height: "100vh" }}
                >
                    {/* <!-- Header --> */}
                    <div
                        className="d-flex align-items-center"
                        style={{ height: "15vh", padding: "0 2rem" }}
                    >
                        <div
                            className="flex-grow-0 text-white"
                            style={{ width: "33.33%" }}
                        >
                            <h2>Homecare</h2>
                        </div>
                        <div className="flex-grow-1 d-flex justify-content-end">
                            <a href="#" className="text-white mx-2 no-hover">
                                Consultation
                            </a>
                            <a href="#" className="text-white mx-2 no-hover">
                                About Us
                            </a>
                            <a href="#" className="text-white mx-2 no-hover">
                                Support
                            </a>
                            <a href="#" className="text-white mx-2 no-hover">
                                Contact Us
                            </a>
                            <a href="/dashboard" className="btn btn-info mx-2">
                                Get started
                            </a>
                        </div>
                    </div>
                    {/* <!-- Body --> */}
                    <div className="row flex-grow-1 d-flex align-items-center text-white">
                        <div className="col-md-2"></div>
                        <div className="col-md-4 d-flex flex-column align-items-start">
                            <h1>
                                Trusted Home Care,
                                <br />Right at Your Doorstep
                            </h1>
                            <p>
                                With lots of unique blocks, you can easily build a page without
                                coding.
                                <br /> Build your next consultancy website within few minutes.
                            </p>
                            <a
                                href="#"
                                className="mx-2 no-hover"
                                style={{ color: "#68D585" }}
                            >
                                Request a Service →
                            </a>
                        </div>
                        <div className="col-md-6 d-flex flex-column justify-content-start">
                            <img
                                src="../../public/assets/images/png/homecareVid.png"
                                className="img-fluid w-70"
                            />
                        </div>
                    </div>
                </div>

                <div
                    className="row align-items-center text-center bottom-shadow"
                    style={{ height: "65vh" }}
                >
                    <div className="col-md-4 mb-4">
                        <div className="d-flex flex-column align-items-center">
                            <div className="mb-3">
                                <i className="bi bi-calendar-fill text-primary"></i>
                            </div>
                            <h5 className="fw-bold">Easy Scheduling</h5>
                            <p className="text-muted">
                                Book and manage home visits in just a few taps
                            </p>
                        </div>
                    </div>

                    <div className="col-md-4 mb-4">
                        <div className="d-flex flex-column align-items-center">
                            <div className="mb-3">
                                <i className="bi bi-person-check-fill fs-1 text-primary"></i>
                            </div>
                            <h5 className="fw-bold">Trusted Caregivers</h5>
                            <p className="text-muted">
                                Varied and Verified professionals ready to assist at home.
                            </p>
                        </div>
                    </div>

                    <div className="col-md-4 mb-4">
                        <div className="d-flex flex-column align-items-center">
                            <div className="mb-3">
                                <i className="bi bi-bar-chart-line-fill fs-1 text-primary"></i>
                            </div>
                            <h5 className="fw-bold">Seamless Healthcare Tracking</h5>
                            <p className="text-muted">
                                Stay updated on care plans, progress, and reports.
                            </p>
                        </div>
                    </div>
                </div>

                <div
                    className="row align-items-center text-white bottom-shadow"
                    style={{ height: "80vh", backgroundColor: "#4073F0" }}
                >
                    <div className="col-sm-12 col-md-6 d-flex justify-content-end p-5">
                        <img
                            src="../../public/assets/images/png/Dashboard.png"
                            className="img-fluid w-70"
                        />
                    </div>
                    <div className="col-sm-12 col-md-6 d-flex flex-column jusfity-content-center">
                        <h1>
                            Track all your healthcare
                            <br />services on one app
                        </h1>
                        <p>MIke Tyson</p>
                    </div>
                </div>
                <div
                    className="row align-items-center justify-content-center text-white"
                    style={{ height: "100vh" }}
                >
                    <div
                        className="col-sm-12 col-md-6 d-flex flex-column align-items-end text-start"
                        style={{ color: "#161C2D" }}
                    >
                        <h1>
                            Understand your loved ones’ needs.
                            <br />Provide care with confidence.
                        </h1>
                        <p>Mike Tyson</p>
                    </div>
                    <div className="col-sm-12 col-md-6 d-flex justify-content-start p-5">
                        <img
                            src="../../public/assets/images/png/Dashboard.png"
                            className="img-fluid w-70"
                        />
                    </div>
                </div>
                <div
                    className="box-container d-flex flex-column bottom-shadow"
                    style={{ backgroundColor: "#ECF2F7", padding: "2rem" }}
                >
                    <div
                        className="d-flex flex-row align-items-center justify-content-center"
                        style={{ height: "10vh", color: "#161C2D" }}
                    >
                        <h2>Services Offered</h2>
                    </div>
                    <div className="boxes-grid flex-grow-1">
                        <div className="row g-5 justify-content-center">
                            <div className="col-6 col-sm-4 col-md-4">
                                <div className="square-box bg-white text-center shadow">
                                    <i className="bi bi-house-heart"></i>
                                </div>
                                <div className="text-center" style={{ color: "#161C2D" }}>
                                    Homecare Services
                                </div>
                            </div>

                            <div className="col-6 col-sm-4 col-md-4">
                                <div className="square-box bg-white text-center shadow">
                                    <i className="bi bi-card-checklist"></i>
                                </div>
                                <div className="text-center" style={{ color: "#161C2D" }}>
                                    Care Planning
                                </div>
                            </div>

                            <div className="col-6 col-sm-4 col-md-4">
                                <div className="square-box bg-white text-center shadow">
                                    <i className="bi bi-prescription2"></i>
                                </div>
                                <div className="text-center" style={{ color: "#161C2D" }}>
                                    Prescription Records <br /> and Delivery
                                </div>
                            </div>

                            <div className="col-6 col-sm-4 col-md-4">
                                <div className="square-box bg-white text-center shadow">
                                    <i className="bi bi-calendar-check"></i>
                                </div>
                                <div className="text-center" style={{ color: "#161C2D" }}>
                                    Care Plan Scheduling and <br /> records
                                </div>
                            </div>

                            <div className="col-6 col-sm-4 col-md-4">
                                <div className="square-box bg-white text-center shadow">
                                    <i className="bi bi-file-medical"></i>
                                </div>
                                <div className="text-center" style={{ color: "#161C2D" }}>
                                    Comprehensive Medical <br /> records and diagnosis
                                </div>
                            </div>

                            <div className="col-6 col-sm-4 col-md-4">
                                <div className="square-box bg-white text-center shadow">
                                    <i className="bi bi-chat-left-dots"></i>
                                </div>
                                <div className="text-center" style={{ color: "#161C2D" }}>
                                    Online Consultations
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    className="row bg-landing-gradient-footer bottom-shadow align-items-center"
                    style={{ height: "70vh" }}
                >
                    <div className="col-12 col-md-4 d-flex flex-column align-items-center mb-4 mb-md-0 text-white">
                        <h3>HomeCare</h3>
                        <p>
                            A homecare app that helps families monitor,
                            <br />manage, and support their loved ones’ daily
                            <br />health needs with ease and confidence.
                        </p>
                    </div>

                    <div className="col-6 col-md-2 d-flex flex-column align-items-center align-items-md-start mb-3 mb-md-0 text-white">
                        <h4>
                            <strong>Company</strong>
                        </h4>
                        <p>About Us</p>
                        <p>Contact Us</p>
                        <p>Socials</p>
                    </div>

                    <div className="col-6 col-md-2 d-flex flex-column align-items-center align-items-md-start mb-3 mb-md-0 text-white">
                        <h4>
                            <strong>Product</strong>
                        </h4>
                        <p>Features</p>
                        <p>Pricing</p>
                        <p>News</p>
                        <p>Help Desk</p>
                    </div>

                    <div className="col-6 col-md-2 d-flex flex-column align-items-center align-items-md-start mb-3 mb-md-0 text-white">
                        <h4>
                            <strong>Services</strong>
                        </h4>
                        <p>Consultations</p>
                        <p>Home Visits</p>
                        <p>Care Plans</p>
                    </div>

                    <div className="col-6 col-md-2 d-flex flex-column align-items-center align-items-md-start text-white">
                        <h4>
                            <strong>Legal</strong>
                        </h4>
                        <p>Terms</p>
                        <p>Privacy Policy</p>
                    </div>
                </div>
            </section>

    );
}