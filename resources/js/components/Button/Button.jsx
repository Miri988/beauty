export const Button = ({className, type, children, onClick}) => {
  
  return (
    <button className = {className} type = {type} onClick={() => onClick()}>{children}</button>
  )
}
