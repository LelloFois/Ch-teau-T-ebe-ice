import ReactDOM from "react-dom/client";
import App from "./final-project/App";
import { BrowserRouter } from "react-router-dom";
import "./finalProject.css";

const root = ReactDOM.createRoot(document.querySelector("#root"));
root.render(
    <BrowserRouter>
        <App />
    </BrowserRouter>
);
