import { useNavigate } from "react-router-dom";
 
export default function Home() {
   const navigate = useNavigate();
   return (
       <div className="home">
           <div className="home-hero">
               <p className="home__title">A Memorable Experience.</p>
               <button
                   onClick={() => navigate("/rooms")}
                   className="home-button"
               >
                   {" "}
                   Reserve Now
               </button>
           </div>
           <div className="home-about">
               <div className="home_about_description">
                   <h3 className="lowlight"> About <strong className="highlight">Chateau Trebesice</strong></h3>
                   <p>
                       <strong>
                           Discover the unique magic of a place where the past
                           and presence, history and future, nature and culture
                           are combined in one unique mix.
                       </strong>
                   </p>
                   <p className="bottom-p">
                       Château Třebešice is a small Renaissance rural mansion
                       with its own home farm, a beautiful complex of rural
                       buildings from various historical periods on large land
                       rich in water features and beautiful gardens, just 5
                       kilometers from Kutná Hora monuments, one of the most
                       beautiful cities in EUROPE.
                   </p>
                   <button
                       onClick={() => navigate("/about")}
                       className="home-button"
                   >
                       Read more
                   </button>
               </div>
               <img className="about-img"
                   src="./images/interior_library.jpeg"
                   alt="Main Library"
                   width="500px"
                   height="400px"
               />
           </div>
           <div className="home-events">
               <p className="home__events_title">Events</p>
               <p>
                   We can make sure you remember your celebration for their
                   life.<br/>We can offer you a luxury ,private celebration that
                   will be made exactly tailored for you and your needs.<br/>Over
                   the high quality framework
               </p>
               <button onClick={() => navigate("/events")}>Events</button>
           </div>
 
           <div className="pic-ctn">
               <img
                   src="./images/room_blue_bed.jpeg"
                   alt=""
                   width="700px"
                   height="500px"
                   className="pic"
               />
               <img
                   src="./images/room_gold_decor.jpeg"
                   alt=""
                   width="700px"
                   height="500px"
                   className="pic"
               />
               <img
                   src="./images/exterior_garden.jpeg"
                   alt=""
                   width="700px"
                   height="500px"
                   className="pic"
               />
               <img
                   src="./images/exterior_nightview.jpeg"
                   alt=""
                   width="700px"
                   height="500px"
                   className="pic"
               />
           </div>
           <div className="btn-gallery">
               <button
                   onClick={() => navigate("/gallery")}
                   className="home-button"
               >
                   View More{" "}
               </button>
           </div>
       </div>
   );
}
 

