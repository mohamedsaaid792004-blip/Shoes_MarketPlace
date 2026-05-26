import { useState, useEffect } from 'react'
import axios from 'axios'

export default function App(){
  const [shoes, setShoes] = useState([])
  const [loading, setLoading] = useState(true)

  useEffect(()=>{
    axios.get('/api/shoes')
      .then(r=>{ setShoes(r.data); setLoading(false) })
      .catch(()=> setLoading(false))
  },[])

  return (
    <div className="app container py-5">
      <header className="d-flex align-items-center justify-content-between mb-4">
        <h1 className="h3 m-0">Shoes Shop</h1>
        <nav>
          <a href="#" className="me-3 text-decoration-none">Home</a>
          <a href="#" className="text-decoration-none">Catalog</a>
        </nav>
      </header>

      {loading ? <p>Loading...</p> : (
        <div className="grid">
          {shoes.map(s=> (
            <article key={s.id} className="card p-3">
              {s.image && <img src={s.image} alt={s.name} className="mb-3" />}
              <h3 className="h6">{s.name}</h3>
              <p className="text-muted small">{s.description}</p>
              <div className="d-flex justify-content-between align-items-center mt-2">
                <div className="price">${s.price}</div>
                <button className="btn btn-sm btn-primary">Add</button>
              </div>
            </article>
          ))}
        </div>
      )}
    </div>
  )
}
