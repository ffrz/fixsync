import { Button } from '@/Components/ui/button'
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout'
import { Head, usePage } from '@inertiajs/react'
import { useEffect, useState } from 'react'

export default function Dashboard() {
  const [counter, setCounter] = useState(0)
  const props = usePage().props;

  useEffect(() => {
    console.log('called only once', props);
  }, []);

  useEffect(() => {
    console.log('counter changed', counter);
  }, [counter]);

  const handleClick = () => {
    setCounter(counter + 1)
  }

  return (
    <AuthenticatedLayout
      header={
        <h2 className="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
          Dashboard
        </h2>
      }
    >
      <Head title="Dashboard" />

      <div className="py-12">
        <div className="mx-auto max-w-7xl sm:px-6 lg:px-8">
          <div className="overflow-hidden bg-white shadow-sm dark:bg-gray-800 sm:rounded-lg">
            <div className="p-6 text-gray-900 dark:text-gray-100">
              You're logged in! {counter}
              <br />
              <Button onClick={handleClick}>Increment</Button>
              <Button
                onClick={() => {
                  setCounter(counter - 1)
                }}
              >
                Decrement
              </Button>
            </div>
          </div>
        </div>
      </div>
    </AuthenticatedLayout>
  )
}
