import React from "react";
import TagdijItem from "./TagdijItem.jsx";

function TagdijList({ tagdijak }) {
  return (
    <table className="tagdij-table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Tag neve</th>
          <th>Összeg</th>
          <th>Dátum</th>
        </tr>
      </thead>
      <tbody>
        {tagdijak.map((item) => (
          <TagdijItem key={item.id} data={item} />
        ))}
      </tbody>
    </table>
  );
}

export default TagdijList;
