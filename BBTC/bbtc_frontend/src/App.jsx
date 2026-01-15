import React, { useEffect, useState } from "react";
import TagdijList from "./components/TagdijList.jsx";
import "./style.css";

function App() {
  const [tagdijak, setTagdijak] = useState([]);

  useEffect(() => {
    fetch("http://localhost:8000/api/tagdij")
      .then((res) => res.json())
      .then((data) => {
        setTagdijak(data);
      })
      .catch((err) => {
        console.error("Hiba:", err);
      });
  }, []);

  return (
    <div className="container">
      <h1>Tagdíjak</h1>
      <TagdijList tagdijak={tagdijak} />
    </div>
  );
}

export default App;
