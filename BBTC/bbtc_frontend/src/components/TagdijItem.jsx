import React from "react";

function TagdijItem({ data }) {
  return (
    <tr>
      <td>{data.id}</td>
      <td>{data.tag_nev}</td>
      <td>{data.osszeg}</td>
      <td>{data.datum}</td>
    </tr>
  );
}

export default TagdijItem;
