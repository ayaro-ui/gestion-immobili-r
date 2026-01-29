import { useEffect, useState } from "react";
import api from "../api/axios";

export default function Biens() {
  const [biens, setBiens] = useState([]);

  useEffect(() => {
    api.get("/biens").then(res => setBiens(res.data));
  }, []);

  return (
    <div>
      <h2>Liste des biens</h2>
      {biens.map(bien => (
        <p key={bien.id}>{bien.titre}</p>
      ))}
    </div>
  );
}
