async function Connect() {
  if (global.connection && global.connection.state !== 'disconnected')
    return global.connection;

  const mysql = require('mysql2/promise');
  const connection = await mysql.createConnection(
    'mysql://root:061650@localhost:3306/Localidades'
  );
  global.connection = connection;
  return connection;
}

async function getAll() {
  const conn = await Connect();
  const [rows] = await conn.query('SELECT * FROM localidades.locais;');
  return rows;
}

async function newRegister(nome, lat, long) {
  const conn = await Connect();
  const sql =
    'INSERT INTO locais (nome, latitude, longitude) VALUES( ?, ?, ?);';

  const values = [nome, lat, long];
  await conn.query(sql, values);
}

module.exports = { getAll, newRegister };
