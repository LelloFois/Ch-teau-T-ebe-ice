import { useState } from "react";
import axios from "axios";
import { useNavigate } from "react-router-dom";

export default function Contacts() {
    const navigate = useNavigate();
    const [values, setValues] = useState({
        name: "name",
        email: "email",
        phone: "phone",
        subject: "subject",
        message: "message",
    });

    const handleChange = (event) => {
        setValues((previous_values) => {
            return {
                ...previous_values,
                [event.target.name]: event.target.value,
            };
        });
    };

    const handleSubmit = (event) => {
        // prevent the default event behaviour
        event.preventDefault();

        fetch("http://localhost:3000/contact/submit", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(values),
        })
            .then((response) => response.json())
            .then(() => {
                console.log("Success:");
                navigate("/feedback");
            })
            .catch((error) => {
                console.error("Error:", error);
            });
    };
    return (
        <main className="contact">
            <div className="contact-hero">
                {/* <img src="./images/ContactUs_hero.jpg" alt="receptionist picture" className="contact__image" /> */}
                <h1 className="contact__title">Contact Us</h1>
            </div>

            <div className="contact__contacts">
                <div className="contact__contacts-phone">
                    <img
                        src="../images/phone-full.svg"
                        alt="phone icon"
                        width="20px"
                    />
                    <p>+420 732 79090</p>
                </div>
                <div className="contact__contacts-email">
                    <img
                        src="../images/mail-full.svg"
                        alt="mail icon"
                        width="20px"
                    />
                    <p>contact@ctt.com</p>
                </div>
                <div className="contact__contacts-location">
                    <img
                        src="../images/location-full.svg"
                        alt="location icon"
                        width="20px"
                    />
                    <div className="contact__contacts-location-address">
                        <p>Zamek, Třebešice 28601 Čáslav</p>
                        <p>Czech Republic</p>
                    </div>
                </div>
                <div className="mapouter">
                    <div class="gmap_canvas">
                        <iframe
                            width="600"
                            height="500"
                            id="gmap_canvas"
                            src="https://maps.google.com/maps?q=Chateau%20Trebesice%20Z%C3%A1mek%20T%C5%99ebe%C5%A1ice%201%2028601%20%C4%8C%C3%A1slav%20Czech%20Republic%20&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameBorder="0"
                            scrolling="no"
                            marginHeight="0"
                            marginWidth="0"
                        ></iframe>
                    </div>
                </div>
            </div>
            <div className="form">
                <form
                    method="POST"
                    onSubmit={(e) => {
                        handleSubmit(e);
                    }}
                >
                    <h3>Contact Us</h3>
                    <p>Name</p>
                    <input
                        type="text"
                        name="name"
                        id="name"
                        onChange={(e) => {
                            handleChange(e);
                        }}
                        required
                    />
                    <p>Email</p>
                    <input
                        type="email"
                        name="email"
                        id="email"
                        onChange={(e) => {
                            handleChange(e);
                        }}
                        required
                    />
                    <p>Phone</p>
                    <input
                        type="text"
                        id="phone"
                        name="phone"
                        onChange={(e) => {
                            handleChange(e);
                        }}
                    />
                    <input
                        type="text"
                        class="form-control"
                        name="subject"
                        id="subject"
                        onChange={(e) => {
                            handleChange(e);
                        }}
                        placeholder="Subject"
                    />

                    <textarea
                        id="textarea"
                        name="textarea"
                        rows="5"
                        cols="50"
                        onChange={(e) => {
                            handleChange(e);
                        }}
                    ></textarea>
                    <input
                        className="submitForm"
                        type="submit"
                        value="Submit"
                    />
                </form>
            </div>
        </main>
    );
}
