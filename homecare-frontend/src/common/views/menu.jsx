import React from "react";
import { Link } from "react-router-dom";
export default function Menu() {

  return (
    <>
    {/* <div className="app sidebar-mini light-mode default-sidebar"> */}
      {/* Global-loader */}
        {/* <div id="global-loader">
        <img src="/assets/images/svgs/loader.svg" alt="loader" />
        </div>

        <div className="page">
            <div className="page-main"> */}
                {/* aside open */}
                <div className="app-sidebar app-sidebar2">
                    <div className="app-sidebar__logo d-flex flex-row justify-content-center align-items-center">
                    <a className="d-flex flex-row justify-content-center align-items-center gap-4" href="/">
                        <img src="/assets/images/png/HomeCareLogo.png" alt="Rygel Dash logo" />
                        <h3>HomeCare</h3>
                    </a>
                    </div>
                </div>
                    
                    <aside className="app-sidebar app-sidebar3">
                        
                        <ul className="side-menu">
                            <li className="slide">
                                <Link className="side-menu__item" to="/dashboard">
                                <svg className="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                                <span className="side-menu__label">Dashboard</span><i className="angle fa fa-angle-right"></i></Link>
                            </li>
                            <li className="slide">
                                <Link className="side-menu__item" to="/schedule">
                                <svg className="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                                <span className="side-menu__label">Schedule</span><i className="angle fa fa-angle-right"></i></Link>
                            </li>
                            <li className="slide">
                                <a className="side-menu__item" data-toggle="slide" href="#">
                                <svg className="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg>
                                <span className="side-menu__label">Calendar</span><i className="angle fa fa-angle-right"></i></a>
                                <ul className="slide-menu">
                                    <li className="sub-slide">
                                        <a className="sub-side-menu__item" data-toggle="sub-slide" href="#"><span className="sub-side-menu__label">Chat</span><i className="sub-angle fe fe-chevron-down"></i></a>
                                        <ul className="sub-slide-menu">
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/chat'); ?>">Chat</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/chat2'); ?>">Chat 02</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/chat3'); ?>">Chat 03</a></li>
                                        </ul>
                                    </li>
                                    <li className="sub-slide">
                                        <a className="sub-side-menu__item" data-toggle="sub-slide" href="#"><span className="sub-side-menu__label">Contact</span><i className="sub-angle fe fe-chevron-down"></i></a>
                                        <ul className="sub-slide-menu">
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/contact-list'); ?>">Contact list</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/contact-list2'); ?>">Contact list 02</a></li>
                                        </ul>
                                    </li>
                                    <li className="sub-slide">
                                        <a className="sub-side-menu__item" data-toggle="sub-slide" href="#"><span className="sub-side-menu__label">File Manager</span><i className="sub-angle fe fe-chevron-down"></i></a>
                                        <ul className="sub-slide-menu">
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/file-manager'); ?>">File Manager</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/file-manager-list'); ?>">File Manager 02</a></li>
                                        </ul>
                                    </li>
                                    <li className="sub-slide">
                                        <a className="sub-side-menu__item" data-toggle="sub-slide" href="#"><span className="sub-side-menu__label">Todo List</span><i className="sub-angle fe fe-chevron-down"></i></a>
                                        <ul className="sub-slide-menu">
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/todo-list'); ?>">Todo List</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/todo-list2'); ?>">Todo List 02</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/todo-list3'); ?>">Todo List 03</a></li>
                                        </ul>
                                    </li>
                                    <li className="sub-slide">
                                        <a className="sub-side-menu__item" data-toggle="sub-slide" href="#"><span className="sub-side-menu__label">User List</span><i className="sub-angle fe fe-chevron-down"></i></a>
                                        <ul className="sub-slide-menu">
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/users-list-1'); ?>">User List 01</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/users-list-2'); ?>">User List 02</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/users-list-3'); ?>">User List 03</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/users-list-4'); ?>">User List 04</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url('pages/calendar'); ?>" className="slide-item"> Calendar</a></li>
                                    <li><a href="<?php echo base_url('pages/dragula'); ?>" className="slide-item"> Dragula Card</a></li>
                                    <li><a href="<?php echo base_url('pages/cookies'); ?>" className="slide-item"> Cookies</a></li>
                                    <li><a href="<?php echo base_url('pages/image-comparison'); ?>" className="slide-item"> Image Comparison</a></li>
                                    <li><a href="<?php echo base_url('pages/img-crop'); ?>" className="slide-item"> Image Crop</a></li>
                                    <li><a href="<?php echo base_url('pages/page-sessiontimeout'); ?>" className="slide-item"> Page-sessiontimeout</a></li>
                                    <li><a href="<?php echo base_url('pages/notify'); ?>" className="slide-item"> Notifications</a></li>
                                    <li><a href="<?php echo base_url('pages/sweetalert'); ?>" className="slide-item"> Sweet alerts</a></li>
                                    <li><a href="<?php echo base_url('pages/rangeslider'); ?>" className="slide-item"> Range slider</a></li>
                                    <li><a href="<?php echo base_url('pages/counters'); ?>" className="slide-item"> Counters</a></li>
                                    <li><a href="<?php echo base_url('pages/loaders'); ?>" className="slide-item"> Loaders</a></li>
                                    <li><a href="<?php echo base_url('pages/time-line'); ?>" className="slide-item"> Time Line</a></li>
                                    <li><a href="<?php echo base_url('pages/rating'); ?>" className="slide-item"> Rating</a></li>
                                </ul>
                            </li>
                            <li className="slide">
                                <a className="side-menu__item" data-toggle="slide" href="#">
                                <svg className="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path><polyline points="3.27 6.96 12 12.01 20.73 6.96"></polyline><line x1="12" y1="22.08" x2="12" y2="12"></line></svg>
                                <span className="side-menu__label">Care Providers</span><i className="angle fa fa-angle-right"></i></a>
                                <ul className="slide-menu">
                                    <li><a href="<?php echo base_url('pages/widgets-1'); ?>" className="slide-item">Widgets</a></li>
                                    <li><a href="<?php echo base_url('pages/widgets-2'); ?>" className="slide-item">Chart Widgets</a></li>
                                </ul>
                            </li>
                            <li className="slide">
                                <a className="side-menu__item" data-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="side-menu__icon"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg>
                                <span className="side-menu__label">Forms</span><i className="angle fa fa-angle-right"></i></a>
                                <ul className="slide-menu">
                                    <li><a href="<?php echo base_url('pages/form-elements'); ?>" className="slide-item"> Form Elements</a></li>
                                    <li><a href="<?php echo base_url('pages/advanced-forms'); ?>" className="slide-item"> Advanced Forms</a></li>
                                    <li><a href="<?php echo base_url('pages/form-wizard'); ?>" className="slide-item"> Form Wizard</a></li>
                                    <li><a href="<?php echo base_url('pages/wysiwyag'); ?>" className="slide-item"> Form Edit</a></li>
                                    <li><a href="<?php echo base_url('pages/form-sizes'); ?>" className="slide-item"> Form Element Sizes</a></li>
                                    <li><a href="<?php echo base_url('pages/form-treeview'); ?>" className="slide-item"> Form Treeview</a></li>
                                </ul>
                            </li>
                            <li className="slide">
                                <a className="side-menu__item" data-toggle="slide" href="#">
                                <svg className="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M21.21 15.89A10 10 0 1 1 8 2.83"></path><path d="M22 12A10 10 0 0 0 12 2v10z"></path></svg>
                                <span className="side-menu__label">Clinical Notes</span><i className="angle fa fa-angle-right"></i></a>
                                <ul className="slide-menu">
                                    <li><a href="<?php echo base_url('pages/chart-chartist'); ?>" className="slide-item">Chartjs Charts</a></li>
                                    <li><a href="<?php echo base_url('pages/chart-morris'); ?>" className="slide-item"> Morris Charts</a></li>
                                    <li><a href="<?php echo base_url('pages/chart-apex'); ?>" className="slide-item"> Apex Charts</a></li>
                                    <li><a href="<?php echo base_url('pages/chart-peity'); ?>" className="slide-item"> Pie Charts</a></li>
                                    <li><a href="<?php echo base_url('pages/chart-echart'); ?>" className="slide-item"> Echart Charts</a></li>
                                    <li><a href="<?php echo base_url('pages/chart-flot'); ?>" className="slide-item"> Flot Charts</a></li>
                                    <li><a href="<?php echo base_url('pages/chart-c3'); ?>" className="slide-item">C3 Charts</a></li>
                                </ul>
                            </li>
                            <li className="slide">
                                <a className="side-menu__item" data-toggle="slide" href="#">
                                <svg className="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><polygon points="1 6 1 22 8 18 16 22 23 18 23 2 16 6 8 2 1 6"></polygon><line x1="8" y1="2" x2="8" y2="18"></line><line x1="16" y1="6" x2="16" y2="22"></line></svg>
                                <span className="side-menu__label">Services</span><i className="angle fa fa-angle-right"></i></a>
                                <ul className="slide-menu">
                                    <li><a href="<?php echo base_url('pages/maps'); ?>" className="slide-item">Vector Maps</a></li>
                                    <li><a href="<?php echo base_url('pages/maps2'); ?>" className="slide-item">Leaflet Maps</a></li>
                                    <li><a href="<?php echo base_url('pages/maps3'); ?>" className="slide-item">Mapel Maps</a></li>
                                </ul>
                            </li>
                            <li className="slide">
                                <a className="side-menu__item" data-toggle="slide" href="#">
                                <svg className="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><line x1="3" y1="9" x2="21" y2="9"></line><line x1="9" y1="21" x2="9" y2="9"></line></svg>
                                <span className="side-menu__label">Files</span><i className="angle fa fa-angle-right"></i></a>
                                <ul className="slide-menu">
                                    <li><a href="<?php echo base_url('pages/tables'); ?>" className="slide-item">Default table</a></li>
                                    <li><a href="<?php echo base_url('pages/datatable'); ?>" className="slide-item">Data Table</a></li>
                                </ul>
                            </li>
                            <li className="slide">
                                <a className="side-menu__item" data-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="side-menu__icon"><rect x="3" y="3" width="7" height="7"></rect><rect x="14" y="3" width="7" height="7"></rect><rect x="14" y="14" width="7" height="7"></rect><rect x="3" y="14" width="7" height="7"></rect></svg>
                                <span className="side-menu__label">Prescriptions</span><i className="angle fa fa-angle-right"></i></a>
                                <ul className="slide-menu">
                                    <li><a href="<?php echo base_url('pages/accordion'); ?>" className="slide-item"> Accordion</a></li>
                                    <li><a href="<?php echo base_url('pages/alerts'); ?>" className="slide-item"> Alerts</a></li>
                                    <li><a href="<?php echo base_url('pages/avatars'); ?>" className="slide-item"> Avatars</a></li>
                                    <li><a href="<?php echo base_url('pages/badge'); ?>" className="slide-item"> Badges</a></li>
                                    <li><a href="<?php echo base_url('pages/breadcrumbs'); ?>" className="slide-item"> Breadcrumb</a></li>
                                    <li><a href="<?php echo base_url('pages/buttons'); ?>" className="slide-item"> Buttons</a></li>
                                    <li><a href="<?php echo base_url('pages/cards'); ?>" className="slide-item"> Cards</a></li>
                                    <li><a href="<?php echo base_url('pages/cards-image'); ?>" className="slide-item"> Card Images</a></li>
                                    <li><a href="<?php echo base_url('pages/carousel'); ?>" className="slide-item"> Carousel</a></li>
                                    <li><a href="<?php echo base_url('pages/dropdown'); ?>" className="slide-item"> Dropdown</a></li>
                                    <li><a href="<?php echo base_url('pages/footers'); ?>" className="slide-item"> Footers</a></li>
                                    <li><a href="<?php echo base_url('pages/headers'); ?>" className="slide-item"> Headers</a></li>
                                    <li><a href="<?php echo base_url('pages/jumbotron'); ?>" className="slide-item"> Jumbotron</a></li>
                                    <li><a href="<?php echo base_url('pages/list'); ?>" className="slide-item"> List</a></li>
                                    <li><a href="<?php echo base_url('pages/media-object'); ?>" className="slide-item"> Media Obejct</a></li>
                                    <li><a href="<?php echo base_url('pages/modal'); ?>" className="slide-item"> Modal</a></li>
                                    <li><a href="<?php echo base_url('pages/navigation'); ?>" className="slide-item"> Navigation</a></li>
                                    <li><a href="<?php echo base_url('pages/pagination'); ?>" className="slide-item"> Pagination</a></li>
                                    <li><a href="<?php echo base_url('pages/panels'); ?>" className="slide-item"> Panel</a></li>
                                    <li><a href="<?php echo base_url('pages/popover'); ?>" className="slide-item"> Popover</a></li>
                                    <li><a href="<?php echo base_url('pages/progress'); ?>" className="slide-item"> Progress</a></li>
                                    <li><a href="<?php echo base_url('pages/tabs'); ?>" className="slide-item"> Tabs</a></li>
                                    <li><a href="<?php echo base_url('pages/tags'); ?>" className="slide-item"> Tags</a></li>
                                    <li><a href="<?php echo base_url('pages/tooltip'); ?>" className="slide-item"> Tooltips</a></li>
                                </ul>
                            </li>
                            <li className="slide">
                                <a className="side-menu__item" data-toggle="slide" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="side-menu__icon"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path></svg>
                                <span className="side-menu__label">Files</span><i className="angle fa fa-angle-right"></i></a>
                                <ul className="slide-menu">
                                    <li><a href="<?php echo base_url('pages/icons'); ?>" className="slide-item"> Font Awesome</a></li>
                                    <li><a href="<?php echo base_url('pages/icons2'); ?>" className="slide-item"> Material Design Icons</a></li>
                                    <li><a href="<?php echo base_url('pages/icons3'); ?>" className="slide-item"> Simple Line Icons</a></li>
                                    <li><a href="<?php echo base_url('pages/icons4'); ?>" className="slide-item"> Feather Icons</a></li>
                                    <li><a href="<?php echo base_url('pages/icons5'); ?>" className="slide-item"> Ionic Icons</a></li>
                                    <li><a href="<?php echo base_url('pages/icons6'); ?>" className="slide-item"> Flag Icons</a></li>
                                    <li><a href="<?php echo base_url('pages/icons7'); ?>" className="slide-item"> pe7 Icons</a></li>
                                    <li><a href="<?php echo base_url('pages/icons8'); ?>" className="slide-item"> Themify Icons</a></li>
                                    <li><a href="<?php echo base_url('pages/icons9'); ?>" className="slide-item">Typicons Icons</a></li>
                                    <li><a href="<?php echo base_url('pages/icons10'); ?>" className="slide-item">Weather Icons</a></li>
                                    <li><a href="<?php echo base_url('pages/icons11'); ?>" className="slide-item">Material Icons</a></li>
                                </ul>
                            </li>
                            <li className="slide">
                                <a className="side-menu__item" data-toggle="slide" href="#">
                                <svg className="side-menu__icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg>
                                <span className="side-menu__label">User Account</span><i className="angle fa fa-angle-right"></i></a>
                                <ul className="slide-menu">
                                    <li className="sub-slide">
                                        <a className="sub-side-menu__item" data-toggle="sub-slide" href="#"><span className="sub-side-menu__label">Profile</span><i className="sub-angle fe fe-chevron-down"></i></a>
                                        <ul className="sub-slide-menu">
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/profile-1'); ?>">Profile 01</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/profile-2'); ?>">Profile 02</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/profile-3'); ?>">Profile 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url('pages/editprofile'); ?>" className="slide-item"> Edit Profile</a></li>
                                    <li className="sub-slide">
                                        <a className="sub-side-menu__item" data-toggle="sub-slide" href="#"><span className="sub-side-menu__label">Email</span><i className="sub-angle fe fe-chevron-down"></i></a>
                                        <ul className="sub-slide-menu">
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/email-compose'); ?>">Email Compose</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/email-inbox'); ?>">Email Inbox</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/email-read'); ?>">Email Read</a></li>
                                        </ul>
                                    </li>
                                    <li className="sub-slide">
                                        <a className="sub-side-menu__item" data-toggle="sub-slide" href="#"><span className="sub-side-menu__label">Pricing</span><i className="sub-angle fe fe-chevron-down"></i></a>
                                        <ul className="sub-slide-menu">
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/pricing'); ?>">Pricing 01</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/pricing-2'); ?>">Pricing 02</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/pricing-3'); ?>">Pricing 03</a></li>
                                        </ul>
                                    </li>
                                    <li className="sub-slide">
                                        <a className="sub-side-menu__item" data-toggle="sub-slide" href="#"><span className="sub-side-menu__label">Invoice</span><i className="sub-angle fe fe-chevron-down"></i></a>
                                        <ul className="sub-slide-menu">
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/invoice-list'); ?>">Invoice list</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/invoice-1'); ?>">Invoice 01</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/invoice-2'); ?>">Invoice 02</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/invoice-3'); ?>">Invoice 03</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/invoice-add'); ?>">Add Invoice</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/invoice-edit'); ?>">Edit Invoice</a></li>
                                        </ul>
                                    </li>
                                    <li className="sub-slide">
                                        <a className="sub-side-menu__item" data-toggle="sub-slide" href="#"><span className="sub-side-menu__label">Blog</span><i className="sub-angle fe fe-chevron-down"></i></a>
                                        <ul className="sub-slide-menu">
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/blog'); ?>">Blog 01</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/blog-2'); ?>">Blog 02</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/blog-3'); ?>">Blog 03</a></li>
                                            <li><a className="sub-slide-item" href="<?php echo base_url('pages/blog-styles'); ?>">Blog Styles</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url('pages/gallery'); ?>" className="slide-item"> Gallery</a></li>
                                    <li><a href="<?php echo base_url('pages/faq'); ?>" className="slide-item"> FAQS</a></li>
                                    <li><a href="<?php echo base_url('pages/terms'); ?>" className="slide-item"> Terms</a></li>
                                    <li><a href="<?php echo base_url('pages/empty'); ?>" className="slide-item"> Empty Page</a></li>
                                    <li><a href="<?php echo base_url('pages/search'); ?>" className="slide-item"> Search</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div className="app-sidebar-help">
                            <div className="dropdown text-center">
                                <div className="help d-flex">
                                    <a href="#" className="nav-link p-0 help-dropdown" data-toggle="dropdown">
                                        <span className="font-weight-bold">About Us</span> <i className="fa fa-angle-down ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>  
                    </aside>
                    
                    {/* aside closed */}




    </>
    );
}
