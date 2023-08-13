import styles from "./Pagination.module.scss"

export const Pagination = (props) => {
  const { count, page, onPage } = props
  const totalPages = Math.ceil(count / 15)

  const left = page < 5 ? Array(Math.max(page - 2, 0)).fill().map((_v, i) => i + 1) : [1]
  const dostLeft = page > 4
  const center = Array(3).fill().map((_v, i) => page - 1 + i).filter(v => v > 0 && v <= totalPages)
  const dotsRight = totalPages - page >= 4
  const right = page > totalPages - 4 ? Array(Math.max(totalPages - page - 1, 0)).fill().map((_v, i) => i + page + 2) : [totalPages]

  const pages = [
    ...left,
    dostLeft,
    ...center,
    dotsRight,
    ...right
  ]

  return (
    <nav className={styles.pagination}>
            <i className={`icofont-rounded-left link icon ${styles.icon}`} onClick={() => onPage(Math.max(0, page - 1))}></i>
            <div className={styles.pages}>
              {pages.filter(v => v).map((v, i) => {
                return <div key={i}>
                  { typeof v === 'boolean' && v && <span className={styles.page}>...</span>}
                  { typeof v !== 'boolean' && <span onClick={() => onPage(v)} className={`${styles.page} ${v === page ? styles.active : ''}`}>{v}</span>}
                </div>
              })}
            </div>
            <i className={`icofont-rounded-right link icon ${styles.icon}`} onClick={() => onPage(Math.max(totalPages, page + 1))}></i>
    </nav>
  )
}
